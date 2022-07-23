<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <label>Parametro:
  <input name="Criterio" type="text" id="Criterio" />
  </label>
  <table width="200">
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Id" />
        Id</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Nombre" />
        Nombre</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Domicilio" />
        Domicilio</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Donador" />
        Donador</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Firma" />
        Firma</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Foto" />
        Foto</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Restriccione" />
        Restriccione</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="Observacione" />
        Observacione</label></td>
    </tr>
    <tr>
      <td><label>
        <input type="radio" name="Atributo" value="GrupoSanguineo" />
        GrupoSanguineo</label></td>
    </tr>
  </table>
  <p>
    <label>
    <input name="Enviar" type="submit" id="Enviar" value="Enviar" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
<?php
	if(isset($_REQUEST['Criterio']) and isset($_REQUEST['Atributo'])){
	print("Entro"."<br>");
	$Criterio =$_REQUEST['Criterio'];
	$Atributo =$_REQUEST['Atributo'];
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "SELECT * FROM conductores WHERE $Atributo ='$Criterio'" ;
    $Resulatdo = Consultar($Con,$SQL);
	?>
	<h1 align="center">Conductores</h1>
    <table border='1' align="center">
         <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Domicilio</td>
                <td>Donador</td>
                <td>Firma</td>
                <td>Restriccion</td>
			    <td>Observacion</td>
				<td>GrupoSanguineo</td>
            </tr>
	<?php
    //Procesar datos
    $n= mysqli_num_rows($Resulatdo);
    for($f=0;$f<$n;$f++){
        $Fila = mysqli_fetch_row($Resulatdo);
        //print($Fila[0]."---".$Fila[1]."---".$Fila[2]."---".$Fila[3]."---".$Fila[4]."---".$Fila[5]."---"."<br>");
		print ("<tr>");
               Print( "<td>".$Fila[0]."</td>".
                "<td>".$Fila[1]."</td>".
                "<td>".$Fila[2]."</td>".
                "<td>".$Fila[3]."</td>".
                "<td>".$Fila[4]."</td>".
				        "<td>".$Fila[5]."</td>".
                "<td>".$Fila[6]."</td>".
                "<td>".$Fila[7]."</td>".
               "<td><a href=DConductores.php?Id=$Fila[0]>Eliminar</a></td>");
        print ("</tr>");

    }
           
        Cerrar($Con);
	}
?>