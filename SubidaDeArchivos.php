<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Subida de ficheros</title>
</head>
<body>
	<p>
		<?php
			if($_FILES["fichero"]["error"]){
				echo "Se produjo un error:".$_FILES["fichero"]["erro"];
			}else{
				if(@move_uploaded_file($_FILES["fichero"]["tmp_name"], "C:\\xampp\\files\\".$_FILES["fichero"]["name"])){
					echo "OK, Se movio el archivo";
				}
				else{
					echo "Error, No se pudo mover";
				}

			}
		?>
	</p>
</body>
</html>