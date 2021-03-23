<?php
            $mysqli=new mysqli('localhost','root','','login');
            if ($mysqli->connect_errno) {
              echo "Error al conectarse con My SQL debido al error".$mysqli->connect_error;
            }
            if(isset($_POST['resg'])){
                 $nombres=trim($_POST['nombres']);
                 $apellidos=trim($_POST['apellidos']);
                 $correo=trim($_POST['correo']);
                 $usuario=trim($_POST['usuario']);
                 $password=trim($_POST['password']);
                 $tipo="Usuario";
                 $pais=trim($_POST['pais']);
                 $nacimiento=trim($_POST['nacimiento']);

                 $consulta="INSERT INTO usuarios(nombres, apellidos, correo, usuario, 'password', tipo, pais, nacimiento) 
                 VALUES ('$nombres','$apellidos','$correo','$usuario','$password','$tipo','$pais','$nacimiento'";
                $resultado=mysqli_query($mysqli,$consulta)
                if($resultado){
                  echo'alert("Funciona")';  
                }
            }
        ?>