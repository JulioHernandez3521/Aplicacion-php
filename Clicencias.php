<?php
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "SELECT * FROM licencias";
    $Resulatdo = Consultar($Con,$SQL);
    //Procesar datos
    $n= mysqli_num_rows($Resulatdo);
    ?>
    <h1 align="center">Tabla</h1>
    <table border='1' align="center">
         <tr>
                <td>Nombre</td>
                <td>Tipo</td>
                <td>FechaExp</td>
                <td>Valides</td>
                <td>IdConductor</td>
            </tr>   
<?php
    for($f=0;$f<$n;$f++){
        $Fila = mysqli_fetch_row($Resulatdo);
        print ("<tr>");
               Print( "<td>".$Fila[0]."</td>".
                "<td>".$Fila[1]."</td>".
                "<td>".$Fila[2]."</td>".
                "<td>".$Fila[3]."</td>".
                "<td>".$Fila[4]."</td>");
        print ("</tr>");
    }      
        Cerrar($Con);
?>