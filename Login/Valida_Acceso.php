<?php 
    $IdUsuario = $_REQUEST['IdUsuario'];
    $Password = $_REQUEST['Password'];

    print($IdUsuario);
    print($Password);

    include('../Conexion.php');
    
    $Con = Conectar();
    $SQL = "SELECT * From cuentas WHERE username = '$IdUsuario'";
    $Resultado = Consultar($Con, $SQL);
    
    $n = mysqli_num_rows($Resultado);
    if ($n==0) {
        print("El Usuario no existe");
    } else {
        $Fila = mysqli_fetch_row($Resultado);
        if ($Fila[1]==$Password) {
            if ($Fila[3]==1){
                if ($Fila[4] ==1){
                    print("Usuario Bloqueado");
                } else {
                    if ($Fila[2] == 0){
                        header("Location: User.html");
                    } else {
                        header("Location: Admin.html");
                    }
                }
            } else {
                print("El usuario Inactivo");
            }
        } else {
            print("Contraseña Incorrecta");
            $SQL = "UPDATE cuentas SET Intentos = Intentos +1 WHERE username='$IdUsuario'";
            Consultar($Con, $SQL);
            if ($Fila[5]>2) {
                "UPDATE cuentas SET Bloqueado = 1 WHERE username='$IdUsuario'";
                Consultar($Con, $SQL);
            }
        }
    }
    Cerrar($Con);
?>