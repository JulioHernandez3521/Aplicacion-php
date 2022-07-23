<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	if(empty($_GET["nomdir"])){
		$nomdir = "./";
	}
	else{
		$nomdir = $_GET["nomdir"] .'/' ;
	}
	echo "<h1>Contenido de $nomdir</h1>\n";
	$dir= opendir($nomdir);

	echo"<pre>\n";
	echo"<b>";
	echo str_pad("Nombre", 40);
	echo str_pad("Fecha ult. mod.", 20);
	echo str_pad("Tamaño",10);
	echo "</b></pre>\n";
	echo "<hr><pre>\n";
		while(($fichero = readdir($dir)) != FALSE){
			if(is_dir($nomdir.$fichero)){
				echo '<a href="?nomdir='.urlencode($nomdir.$fichero).'">';
					echo $fichero;
				echo '</a>';
				echo str_repeat ("", 40 - strlen($fichero));
				echo str_pad(date("d/m/Y H:i", filemtime($nomdir.$fichero)),20);
				echo "-";

		}else{
				echo str_pad($fichero, 40);
				echo str_pad(date("d/m/Y H:i", filemtime($nomdir.$fichero)),20);
				echo str_pad(filesize($nomdir.$fichero),10);
		}
		echo "<br />\n";
	}
	closedir($dir);
	echo"</pre><hr />\n";
?>
</body>
</html>