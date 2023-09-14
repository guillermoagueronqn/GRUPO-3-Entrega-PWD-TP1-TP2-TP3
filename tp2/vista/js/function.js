// Funciones Ejercicio 3

function contraSegura() {
    var $enviar;
    if($("#username").val() !== "" || $("#password").val() !== ""){
        if($("#password").val() !== $("#username").val() && $("#password").val().match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)) {
            //cumple con los requisitos
            $enviar = true;
        } else {
            //no cumple
            console.log("No se envía porque la contraseña no cumple");
            $("#username").css("borderColor","red");
            $("#password").css("borderColor","red");
            $enviar = false;
        }
    } else {
        //vacío
        console.log("no se envía por que son vacíos");
        $("#username").css("borderColor","red");
        $("#password").css("borderColor","red");
        $enviar = false;
    }
    return $enviar;
}

// Funciones Ejercicio 4

function borrar() {
    $("#year").css("borderColor","black");
    $("#duracion").css("borderColor","black");
}

function campos() {
    var $vacio;
    if( $("#titulo").val() !== "" && $("#actores").val() !== "" && $("#director").val() !== ""  
    && $("#guion").val() !== "" && $("#produccion").val() !== "" && $("#year").val() !== ""  
    && $("#nacionalidad").val() !== ""  && $("#genero").val() !== "" && $("#duracion").val() !== "" &&
    $("#sinopsis").val() !== "" ){
        //campos no vacíos
        $vacio = false;
    } else {
        $vacio = true;
    }                
    return $vacio;
}

function validador() {
    //campos obligatorios
    if (!campos()) {
        //los campos no están vacíos
        var $enviar = false;
        if($("#year").val() > 1900 && $("#year").val() <= 2023) {
            //verifico el año
            $("#year").css("borderColor","green");
            if ($("#duracion").val() > 100 && $("#duracion").val() < 999) {
                //verifico la duracion
                $("#duracion").css("borderColor","green");
                $enviar = true;
            } else {
                $("#duracion").css("borderColor","red");
            }
        } else {
            $("#year").css("borderColor","red");
        }  
    } else {
        $("#form").css("borderColor","red");
    }
    return $enviar;
}