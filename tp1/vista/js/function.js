// Funciones Ejercicio 1

function validarNumero(){
    var $num = document.getElementById("numero");
    var $error = document.getElementById("error");
    var $esNum;
    if(($num.value == "" || isNaN($num.value))){
        $esNum = false;
        pintarBordeRojo($num);
        $error.style.display = "flex";
        $error.style.justifyContent = "center";
    }else{
        $esNum = true;
    }
    return $esNum;
}

function pintarBordeRojo(elemento){
    elemento.style.border = "1px red solid";
}

// Funciones Ejercicio 2

function validarCampos(){
    var $lunes,$martes,$miercoles,$jueves,$viernes;
    var $resp1=false,$resp2=false,$resp3=false,$resp4=false,$resp5=false,$valido=false;
    $lunes = document.getElementById("lunes");
    $martes = document.getElementById("martes");
    $miercoles = document.getElementById("miercoles");
    $jueves = document.getElementById("jueves");
    $viernes = document.getElementById("viernes");
    $error = document.getElementById("error");

    if($lunes.value == "" || isNaN($lunes.value) || $lunes.value < 0 || $lunes.value > 6){
        pintaBordeRojo($lunes);
    }else{
        pintaNormal($lunes);
        $resp1 = true;
    }

    if($martes.value == "" || isNaN($martes.value) || $martes.value < 0 || $martes.value > 6){
        pintaBordeRojo($martes);
    }else{
        pintaNormal($martes);
        $resp2 = true;
    }

    if($miercoles.value == "" || isNaN($miercoles.value) || $miercoles.value < 0 || $miercoles.value > 6){
        pintaBordeRojo($miercoles);
    }else{
        pintaNormal($miercoles);
        $resp3 = true;
    }

    if($jueves.value == "" || isNaN($jueves.value) || $jueves.value < 0 || $jueves.value > 6){
        pintaBordeRojo($jueves);
    }else{
        pintaNormal($jueves);
        $resp4 = true;
    }

    if($viernes.value == "" || isNaN($viernes.value) || $viernes.value < 0 || $viernes.value > 6){
        pintaBordeRojo($viernes);
    }else{
        pintaNormal($viernes);
        $resp5 = true;
    }

    if($resp1 && $resp2 && $resp3 && $resp4 && $resp5){
        $valido = true;
    }else{
        error($error);
    }

    console.log($valido);

    return $valido;
}

function pintaBordeRojo(elemento){
    elemento.style.border = "1px red solid";
}

function pintaNormal(elemento){
    elemento.style.border = "1px solid";
}

function error(error){
    error.innerHTML = "<li>Debe ingresar un numero del 0 al 6 en los campos</li>";
}

// Funciones Ejercicio 7

function validar7(){
    var resp;
    var numeroA = document.getElementById("numeroA");
    var numeroB = document.getElementById("numeroB");
    var opcionSeleccionada = document.getElementById("operacion");
    if ((isNaN(numeroA.value)) || numeroA.value == ""){
        resp = false;
        numeroA.style.borderColor = "red";
    } else {
        resp = true;
        numeroA.style.borderColor = "green";
        if ((isNaN(numeroB.value)) || numeroB.value == ""){
            resp = false;
            numeroB.style.borderColor = "red";
        } else {
            resp = true;
            numeroB.style.borderColor = "green";
            if (opcionSeleccionada.value == "division"){
                if (numeroB.value == 0){
                    resp = false;
                    numeroB.style.borderColor = "red";
                } else {
                    resp = true;
                    numeroB.style.borderColor = "green";
                } 
            }
        }
    }
    return resp;
}

// Funciones Ejercicio 8

function validar8(){
    var resp;
    var edad = document.getElementById("edad");
    if (Number.isInteger(Number(edad.value)) && edad.value != "" && edad.value > 0){
        resp = true;
        edad.style.borderColor = "green";
    } else {
        resp = false
        edad.style.borderColor = "red";
    }
    return resp;
}