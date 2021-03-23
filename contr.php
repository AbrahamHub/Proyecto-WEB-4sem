<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo.png">
    <script src="js/botones.js"></script>
    <link rel="stylesheet" href="css/estilois2.css">
    <title>contraseña</title>
</head>
<body>

    <form id="cont" method="post">
        <img src="img/logo.png" alt="">
        
        <p id="tit">BrainCloud</p>
        <h1>
            Introduce una contraseña
        </h1>
        <input type="password" name="password" class="caja2" placeholder="contraseña" id="password" required>      
        <h1 id="app">
            Nombre de Usuario
        </h1>
        <input type="text" name="usuario" class="caja2" placeholder="Nickname" id="usuario" required>   

        <script>
            var pag="datos.html";
            var pag2="cc.html";
        </script>
        
        <input type="submit" id="next5" name="sig" value="siguiente" onclick="siguiente(pag)">
        <input type="button" id="atras5" value="atras"  onclick="atras(pag2)">
</form>
<?php
             $mysqlii=new mysqli('localhost','root','','login');
             if ($mysqlii->connect_errno) {
               echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
             }
             if(isset($_POST['sig'])){
                 
                  $nombres=trim($_POST['usuario']);
                  $usuario=trim($_POST['usuario']);
                  $password=trim($_POST['password']);
                  $tipo="Admin";
                  $consulta=$mysqlii->query("INSERT INTO usuarios(nombres, usuario, password, tipo)
                  VALUES ('$nombres','$usuario','$password','$tipo');");
             }
        ?>


</body>
</html>
