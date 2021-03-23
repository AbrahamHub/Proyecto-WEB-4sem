<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>BrianCloud</title>
    <link rel="stylesheet" href="css/main2.css">
    <link rel="icon" href="img/logo.png">
  </head>
  
  <body>
    <div class="error">
      <span>Datos de ingreso no válidos, inténtelo de nuevo  por favor</span>
    </div>
    <div class="main">
     <form action="" id="formLg" method="post">
     <img src="img/logo.png" alt="">
        <p id="tit">BrainCloud</p>
        <input type="text" name="usuariolg"  placeholder="Usuario" required>
        <input type="password" name="passlg"  placeholder="Contraseña" required>
        <input type="submit" name="sig" class="botonlg"  value="Iniciar Sesion" >
        <p id="nc">¿No tiene cuenta?</p>
        <a href="cc.html" id="cc">Cree una</a>
     </form>
     <?php
             $mysqliii=new mysqli('localhost','root','','login');
             if ($mysqliii->connect_errno) {
               echo "Error al conectarse con My SQL debido al error".$mysqliii->connect_error;
             }
             if(isset($_POST['sig'])){                 
                  $usuario=trim($_POST['usuariolg']);
                  $password=trim($_POST['passlg']);
                  $tipo="Admin";
                  $usuarios=$mysqliii->query("Select nombres,tipo
                        From usuarios Where usuario='".$usuario."'
                      AND password='".$password."'");

                      if ($usuarios->num_rows==1):
                        $datos= $usuarios->fetch_assoc();
                        header('Location: Main_app/Admin/admin.php');
                      else:
                        echo"Usuario o contraseña incorrectas vuelva a intentar";
                      endif;
                      $mysqliii->close();
             }
        ?>
    </div>
  </body>
</html>
