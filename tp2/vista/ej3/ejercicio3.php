<html>
    <head>
        <title>Ejercicio 3</title>
        <script type="text/javascript" src="../js/jquery-3.7.0.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href= "../css/style.css">
    </head>
    <body>
        <div class = "row">
        <div class = "col">
            <h3>Member Login</h3>
        <form action="formAccion3.php" id = "form_3" method = "get" name = "inicio" onsubmit = "return contraSegura();">
                <div class="mb-3">
                    <input type="text" class="form-control" name = "username" id = "username" required aria-describedby="emailHelp" placeholder = "Username">
                    <div id="emailHelp" class="form-text">Tus datos estan a salvo.</div>
                </div>
                <div class="mb-3">
                    
                    <input type="password" class="form-control" id="password" name = "password" placeholder = "Password">
                </div>
                <button type="submit" value = "Ingresar" id = "btn_enviar" name = "iniciar" class="btn btn-primary">Enviar</button>
                </form>
        </div>
        </div>

        <script>
            
            function contraSegura(){
            var $enviar;
            if($("#username").val() !== "" || $("#password").val() !== ""){
                if($("#password").val() !== $("#username").val() && $("#password").val().match(/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/)){
                    //cumple con los requisitos
                    $enviar = true;
                }
                else{
                    //no cumple
                    console.log("No se envia porq la contraseña no cumple");
                    $("#username").css("borderColor","red");
                $("#password").css("borderColor","red");
                    $enviar = false;
                }
            }
            else{
                //vacio
                console.log("no se envia por que son vacios");
                $("#username").css("borderColor","red");
                $("#password").css("borderColor","red");
                $enviar = false;
            }
            return $enviar;
        }
        </script>
    </body>
</html>