SET GLOBAL  max_allowed_packet=100*1024*1024;

Create Database ServiSum;

use ServiSum;

Create Table Archivos (
IdArchivo   int(10) NOT NULL AUTO_INCREMENT,
Archivo     longblob NOT NULL,
MimeType    varchar(50) NOT NULL,
Descripcion varchar(100),
PRIMARY KEY (IdArchivo)
);


Create Table Servicios(
    IdServicio   int(10) AUTO_INCREMENT,
    Servicio varchar(200) NOT NULL,
    Descripcion varchar(1000),
    PRIMARY KEY (IdServicio)
);

Create Table Clientes (
    IdCliente     int(10) NOT NULL AUTO_INCREMENT,
    Descripcion     varchar(250) NOT NULL,
    UrlCliente      varchar(500) NULL,
    Archivo         longblob NOT NULL,
    MimeType        varchar(50) NOT NULL,
PRIMARY KEY (IdCliente)
);

Create Table Maquinas (
    IdMaquinaria     int(10) NOT NULL AUTO_INCREMENT,
    Descripcion     varchar(500) NOT NULL,
    Archivo         longblob NOT NULL,
    MimeType        varchar(50) NOT NULL,
PRIMARY KEY (IdMaquinaria)
);


Create Table Evidencias (
    IdEvidencia     int(10) NOT NULL AUTO_INCREMENT,
    Descripcion     varchar(250) NOT NULL,
    Archivo         longblob NOT NULL,
    MimeType        varchar(50) NOT NULL,
    IdServicio         int(10) NOT NULL,
-- IdHerramienta   int(10) NOT NULL,
PRIMARY KEY (IdEvidencia),
CONSTRAINT fk_Evidencias_Servicios FOREIGN KEY (IdServicio) REFERENCES Servicios(IdServicio)
);

-- Create Table Sucursales(
--     IdSucursal  int(10) NOT NULL AUTO_INCREMENT,
--     Longitud    double NOT NULL,
--     Latitud     double NOT NULL,
--     Sucursal    varchar(100),
--     Direccion   varchar(450),
--     PRIMARY KEY (IdSucursal)
-- );

Create Table Publicaciones (
    IdPublic    int(10) NOT NULL AUTO_INCREMENT,
    Seccion     varchar(100) NOT NULL,
    Principal   varchar(500),
    Secundario  varchar(500),
    IdArchivo   int(10),
PRIMARY KEY (IdPublic)
);

Create Table Roles(
    IdRol   int(10) NOT NULL AUTO_INCREMENT,
    Rol     varchar(50) NOT NULL,
    PRIMARY KEY (IdRol)
);

Create Table Contactos(
    IdContacto  int(10) NOT NULL AUTO_INCREMENT,
    Correo      varchar(100) NOT NULL,
    Direccion   varchar(250),
    CodigoP     varchar(10),
    Ciudad      varchar(30),
    Estado      varchar(30),
    Telefono    varchar(15),
    PRIMARY KEY (IdContacto)
);

Create Table Usuarios(
    IdUsuario   int(10) NOT NULL AUTO_INCREMENT,
    Nombre      varchar(50) NOT NULL,
    Correo      varchar(150) NOT NULL,
    Contra      varchar(20) NOT NULL,
    IdRol       int(10) NOT NULL,
    PRIMARY KEY (IdUsuario),
    CONSTRAINT fk_Usuarios_Roles FOREIGN KEY (IdRol) REFERENCES Roles(IdRol)
);

INSERT INTO Roles(IdRol,Rol) VALUES(NULL,'Admin');
INSERT INTO Usuarios(IdUsuario,Nombre,Correo,Contra,IdRol) VALUES(NULL,'AdminServiSum', '','ServiSum2023', '1');

Create View view_publicaciones as
SELECT p.IdPublic, p.Seccion, p.Principal, p.Secundario, p.IdArchivo, a.Archivo, a.MimeType, a.Descripcion
FROM Publicaciones as p
LEFT JOIN
Archivos as a
ON p.IdArchivo = a.IdArchivo
ORDER by IdPublic DESC;

Create View view_Servicios as
SELECT  e.IdEvidencia, e.Descripcion, e.Archivo as EvidenciaImg, e.MimeType as EvidenciaTipoImg, e.IdServicio,
        s.Servicio, s.Descripcion as DescripcionServicio
FROM Evidencias as e
LEFT JOIN
Servicios as s
ON e.IdServicio = s.IdServicio
-- LEFT JOIN
-- TipoHerramientas as h
-- ON p.IdHerramienta = h.IdHerramienta
ORDER by IdEvidencia DESC;

