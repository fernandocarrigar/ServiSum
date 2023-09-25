function myimg() {
    const [file] = document.getElementById("Archivo").files;
    var showimg = document.getElementById("muestra");
    var value = URL.createObjectURL(file);
    showimg.src = value;
}

function disabledSelect(w) {
    document.getElementById(w).removeAttribute("disabled");
}

function valSel(x, y) {
    const select = document.getElementById(x);
    const valor = select.value;
    const selectnew = select.children;
    const select2 = document.getElementById(y);
    const select2new = select2.children;

    for (k = 0; k < selectnew.length; k++) {
        if (selectnew[k].value == valor) {
            selectnew[k].setAttribute("selected", "");
        } else {
            selectnew[k].removeAttribute("selected");
        }
    }

    for (i = 0; i < select2new.length; i++) {
        if (select2new[i].value == valor) {
            select2new[i].setAttribute("selected", "");
        } else {
            select2new[i].removeAttribute("selected");
        }
    }
}

