<?php 
    //Recuperar datos.
    include("../Conexion.php");
    $Con = Conectar();
    $SQL = "SELECT Numero FROM licencias";
    $Resultado = Consultar($Con, $SQL);
    $Fila = mysqli_fetch_row($Resultado);
    Cerrar($Con);
    $codigo = $Fila[0];

    function Nombre(){
        return $codigo;
    }


    //Codigo Barras.
    $FilePath="$codigo.jpg";
    $texto="$codigo";
    $tamaño = 50;
    $tipo = "Code128";
    $orientacion = "Horizontal";
    $Imprimir = true;

    include("barcode.php");
    barcode( $FilePath, $texto, $tamaño, $orientacion, $tipo, $Imprimir);
?>