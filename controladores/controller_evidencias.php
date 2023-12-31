<?php

class Evidencias extends Conectar {
    private $table;
    private $view;
    private $id;
    private $lastid;
    public $values = array();

    public function __construct(){
        $con = new Conectar();
        $this->db = $con->conexionBD();
        $this->field = array();
    }

    public function lastId() {
        $this->lastid = $this->db->insert_id;
        return $this->lastid;
    }

    public function setView($v) {
        $this->view = $v;
    }

    public function setTable($t)    {
        $this->table = $t;
    }

    public function setColumns($c)  {
        $this->column[] = $c;
    }

    public function setKey($k)  {
        $this->pkey = $k;
    }

    public function getAll() {
        $sql = "SELECT * FROM {$this->table}";

        $result = $this->db->query($sql);
        while($row = $result->fetch_assoc()) {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function getWhere($value)  {
        $this->id = $value;
        $sql = "SELECT * FROM {$this->table} WHERE {$this->pkey}={$this->id}";

        $result = $this->db->query($sql);
        while($row = $result->fetch_assoc())   {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function getWhereServicio($value)  {
        $this->val = $value;

        $sql = "SELECT * FROM {$this->view} WHERE IdServicio='{$this->val}' ";
        // echo $sql;
        $result = $this->db->query($sql);
        while($row = $result->fetch_assoc())   {
            $this->field[] = $row;
        }
        return $this->field;
    }

    // public function getWhereHerramienta($value)  {
    //     $this->val = $value;

    //     $sql = "SELECT * FROM {$this->view} WHERE IdHerramienta='{$this->val}' ";
    //     // echo $sql;
    //     $result = $this->db->query($sql);
    //     while($row = $result->fetch_assoc())   {
    //         $this->field[] = $row;
    //     }
    //     return $this->field;
    // }

    public function getView() {
        $sql = "SELECT * FROM {$this->view}";

        $result = $this->db->query($sql);
        while($row = $result->fetch_assoc()) {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function getWhereview($value)  {
        $this->id = $value;
        $sql = "SELECT * FROM {$this->view} WHERE {$this->pkey}={$this->id}";

        $result = $this->db->query($sql);
        while($row = $result->fetch_assoc())   {
            $this->field[] = $row;
        }
        return $this->field;
    }

    public function insertEvidencia($desc,$file,$type,$marca) {
        $this->col = implode(",",$this->column);

        // echo $this->col;
        // echo $this->val;
        $sql = "INSERT INTO {$this->table} ({$this->pkey},{$this->col}) VALUE (NULL,'$desc','$file','$type', '$marca')";
        // echo $sql;
        $this->db->query($sql);
    }

    public function updateEvidencia($value,$desc,$file,$type,$marca)  {
        $this->id = $value;     //ATRAPA EL ID QUE SE USARA PARA IDENTIFICAR CUAL SE CAMBIARA
        // $this->col = implode(",",$this->columsn);
        if(isset($file) && isset($type)){
            $this->values[] = $this->column[0] ."='". $desc ."'";
            $this->values[] = $this->column[1] ."='". $file ."'";
            $this->values[] = $this->column[2] ."='". $type ."'";
            $this->values[] = $this->column[3] ."='". $marca ."'";
        }else{
            $this->values[] = $this->column[0] ."='". $desc ."'";
            $this->values[] = $this->column[3] ."='". $marca ."'";
        }
        $this->val = implode(",",$this->values);

        $sql = "UPDATE {$this->table} SET {$this->val} WHERE {$this->pkey}='{$this->id}'";
        $this->db->query($sql);
    }


    public function deleteEvidencia($value)  {
        $this->id = $value;
        $sql = "DELETE FROM {$this->table} WHERE {$this->pkey}={$this->id}";
        $this->db->query($sql);
    }

    public function deleteEvidenciaWhere($value)  {
        $this->id = $value;
        $sql = "DELETE FROM {$this->table} WHERE IdServicio={$this->id}";
        $this->db->query($sql);
    }
}

?>