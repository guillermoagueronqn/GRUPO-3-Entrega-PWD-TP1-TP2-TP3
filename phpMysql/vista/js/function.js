/* Función utilizada en buscarAuto, NuevoAuto, CambioDuenio */
function validarPatente(){
    var resp = false;
    var patente = document.getElementById("Patente");
    var expresionRegularPatente = /^[A-Z]{3} \d{3}$/;
    if (expresionRegularPatente.test(patente.value)){
        resp = true;
        patente.style.borderColor = "green";
    } else {
        patente.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en CambioDuenio, NuevoAuto */
function validarDni(){
    var resp = false;
    var dni = document.getElementById("DniDuenio");
    var expresionRegularDni = /^\d{8}$/;
    if (dni.value.length == 8 && expresionRegularDni.test(dni.value)){
        resp = true;
        dni.style.borderColor = "green";
    } else {
        dni.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en Cambio Duenio */
function validaCambioDuenio(){
    var resp = false;
    var patenteValida = validarPatente();
    var dniValido = validarDni();
    if (patenteValida && dniValido){
        resp = true;
    }
    return resp;
}

/* Función utilizada en NuevoAuto */
function validarMarca(){
    var resp = false;
    var marca = document.getElementById("Marca");
    var expresionRegularMarca = /^[A-Za-z][A-Za-z0-9 ]*$/;
    if (expresionRegularMarca.test(marca.value)){
        resp = true;
        marca.style.borderColor = "green";
    } else {
        marca.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en NuevoAuto */
function validarModelo(){
    var resp = false;
    var modelo = document.getElementById("Modelo");
    var expresionRegularModelo = /^\d{1,4}$/;
    if (expresionRegularModelo.test(modelo.value)){
        resp = true;
        modelo.style.borderColor = "green";
    } else {
        modelo.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en NuevoAuto */
function validaNuevoAuto(){
    var resp = false;
    var patenteValida = validarPatente();
    var marcaValida = validarMarca();
    var modeloValido = validarModelo();
    var dniValido = validarDni();
    if (patenteValida && marcaValida && modeloValido && dniValido){
        resp = true;
    }
    return resp;
}
// Funciones utilizadas en archivos para la clase Persona
/* Función utilizada en NuevaPersona, BuscarPersona */
function validaDniPersona(){
    var resp = false;
    var dni = document.getElementById("NroDni");
    var expresionRegularDni = /^\d{8}$/;
    if (dni.value.length == 8 && expresionRegularDni.test(dni.value)){
        resp = true;
        dni.style.borderColor = "green";
    } else {
        dni.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en NuevaPersona */
function validaApellidoYNombre(){
    var resp = false;
    var nombre = document.getElementById("Nombre");
    var apellido = document.getElementById("Apellido");
    var expresionRegular = /^[a-zA-Z][a-zA-Z\s]*$/;
    if (expresionRegular.test(apellido.value)){
        apellido.style.borderColor="green";
    } else {
        apellido.style.borderColor="red";
    }
    if (expresionRegular.test(nombre.value)){
        nombre.style.borderColor="green";
    } else {
        nombre.style.borderColor="red";
    }
    if (expresionRegular.test(apellido.value) && expresionRegular.test(nombre.value)){
        resp = true;
    }
    return resp;
}

/* Función utilizada en NuevaPersona */
function validaFechaNacimiento(){
    var resp = false;
    var fecha = document.getElementById("fechaNac");
    var expresionRegularFecha = /^\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01])$/;
    if (expresionRegularFecha.test(fecha.value)){
        var division = fecha.value.split("-");
        var anio = division[0];
        var mes = division[1];
        var dia = division[2];
        anio = Number(anio);
        mes = Number(mes);
        dia = Number(dia);
        if (Number.isInteger(anio) && anio >1900 && anio <= 2023){
            if (Number.isInteger(anio) && Number.isInteger(mes) && Number.isInteger(dia)){
                if (mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 8 || mes == 10 || mes == 12){
                    if (dia >= 1 && dia <= 31){
                        resp = true;
                        fecha.style.borderColor = "green";
                    } else {
                        fecha.style.borderColor = "red";
                    }
                } else if (mes == 4 || mes == 6 || mes == 9 || mes == 11){
                    if (dia >=1 && dia <=30){
                        resp = true;
                        fecha.style.borderColor = "green";
                    } else {
                        fecha.style.borderColor = "red";
                    }
                } else if (mes == 2){
                    if (dia >= 1 && dia <= 28){
                        resp = true;
                        fecha.style.borderColor = "green";
                    } else if (dia >= 1 && dia <=29){
                        if (((anio % 4 == 0) && (anio % 100 != 0)) || (anio % 400 == 0)){
                            resp = true;
                            fecha.style.borderColor = "green";
                        } else {
                            fecha.style.borderColor = "red";
                        }
                    } else {
                        fecha.style.borderColor = "red";
                    }
                } else {
                    fecha.style.borderColor = "red";
                }
            } else {
                fecha.style.borderColor = "red";
            }
        } else {
            fecha.style.borderColor = "red";
        }
    } else {
        fecha.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en NuevaPersona */
function validaTelefono(){
    var resp = false;
    var telefono = document.getElementById("Telefono");
    var expresionRegularTelefono = /^\d{5,}$/;
    if (expresionRegularTelefono.test(telefono.value)){
        telefono.style.borderColor = "green";
        resp = true;
    } else {
        telefono.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en NuevaPersona */
function validaDomicilio(){
    var resp = false;
    var domicilio = document.getElementById("Domicilio");
    var expresionRegularDomicilio = /^[a-zA-Z][a-zA-Z0-9\s]*$/;
    if (expresionRegularDomicilio.test(domicilio.value)){
        domicilio.style.borderColor = "green";
        resp = true;
    } else {
        domicilio.style.borderColor = "red";
    }
    return resp;
}

/* Función utilizada en NuevaPersona */
function validaNuevaPersona(){
    var resp = false;
    var dniValido = validaDniPersona();
    var nombreYApellidoValido = validaApellidoYNombre();
    var fechaNacimientoValida = validaFechaNacimiento();
    var telefonoValido = validaTelefono();
    var domicilioValido = validaDomicilio();
    if (dniValido && nombreYApellidoValido && fechaNacimientoValida && telefonoValido && domicilioValido){
        resp = true;
    }
    return resp;
}