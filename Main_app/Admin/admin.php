<?php
	$formatos   = array('.jpg', '.png', '.gif','.pdf');
	$directorio = 'archivos'; 
	if (isset($_POST['boton'])){
		$nombreArchivo    = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
		if (in_array($ext, $formatos)){
			if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
				
			}else{
				echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"';
			}
		}else{
			echo 'Formato no permitido';
		}
	}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/estiloprincipalA.css">
    <meta name="viewport"
    content="width=device-width,
     user-scalable=no, initial-scale=1.0, 
     maximun-scale=1.0, minimun-scale=1.0">
    <title>BrianCloud</title>
</head>

<body>
    <div id="todo">
        <div >
            
            <div id="cont-arvhivos">
            <div class="card-header">
				Archivos existentes en el directorio
			</div>
			<div class="card-block">
				<div class="row">
                <?php
                //<a href="'.$directorio.'/'.$archivo.'" download="'$archivo'"></a>
					if ($dir = opendir($directorio)){
						while ($archivo = readdir($dir)) {
							if ($archivo != '.' && $archivo != '..'){
								
								echo '<div class="col-sm-3 col-xs-12">';
                                    echo "Archivo: <strong>$archivo</strong> <a href='principal.php'></a><br />";
                                    echo"<a id='btndescargar' href=''archivos/'$archivo' download='$archivo'>Descargar</a>";
                                    echo '<img src="'.$directorio.'/'.$archivo.'" title="imagen" alt="imagen"/>';                      
								echo '</div>';
							}
						}
					}
                ?>
				</div>
			</div>
            </div>
        </div>
        <nav id="barra">
            <aside>
                <img src="img/logomono.png" id="i1">
            </aside>
            <aside id="fn">
                <article id="select">
                </article>
                <img src="img/nube2.png" id="i2">
            </aside>
            <aside>
                <a href="config.html">
                    <img src="img/con1.png" id="i4">
                </a>  
            </aside>
        </nav>
        <div id="parte2">
            <section id="nub">
                <p id="tit">Briancloud</p>
            </section>
        </div>
        <div id="parte3">
            <div id="mm">
                
            </div>
            <input type="button" id="b2" value="Subir archivo" onclick="abrirv()">
            <section id="subirar">
                <h1>Selecciona tu archivo</h1>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="archvio">Archivo</label>
				<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">
				<small id="fileHelp" class="form-text text-muted">Archivos permitidos (.jpg .png .gif)</small>
			</div>
            <button type="submit" class="btn btn-primary" name="boton">Subir archivo</button>
            <input type="button" value="cerrar" onclick="cerv()">
		</form>
	</div>
            </section>
        </div>
        <div id="carpetas1">
            
        </div>
        
    </div>
    <script src="js/main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>