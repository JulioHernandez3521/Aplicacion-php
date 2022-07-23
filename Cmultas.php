<?php
    include("Conexion.php");
    $Con = Conectar();
    $SQL = "SELECT * FROM multas";
    $Resulatdo = Consultar($Con,$SQL);
    //Procesar datos
    $n= mysqli_num_rows($Resulatdo);
    ?>
    <h1 align="center">Tabla</h1>
    <table border='1' align="center">
         <tr>
                <td>ID</td>
                <td>Garantia</td>
                <td>Motivo</td>
                <td>Fecha</td>
                <td>Hora</td>
                <td>NumLicencia</td>
                <td>Placa</td>
                <td>Agente</td>
                <td>Licencia</td>
            </tr>   
<?php
    for($f=0;$f<$n;$f++){
        $Fila = mysqli_fetch_row($Resulatdo);
        print ("<tr>");
               Print( "<td>".$Fila[0]."</td>".
                "<td>".$Fila[1]."</td>".
                "<td>".$Fila[2]."</td>".
                "<td>".$Fila[3]."</td>".
                "<td>".$Fila[4]."</td>".
                "<td>".$Fila[5]."</td>".
                "<td>".$Fila[6]."</td>".
                "<td>".$Fila[7]."</td>".
                "<td>".$Fila[8]."</td>");
        print ("</tr>");
    }      
        Cerrar($Con);
?>