<?php
    include('conexiondb.php');
    $usuario = $_POST['usuario'];
    $contrasenia = $_POST['contrasenia'];

    $usuario = stripcslashes($usuario);
    $contrasenia = stripcslashes($contrasenia);


    $sql = "SELECT * FROM admin where usuario = '$usuario' AND contrasenia = '$contrasenia' ";
    $result = mysqli_query($conexion,$sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);


    if($count == 1){
        session_start();
        $_SESSION['datos admin'] = $row;
        header("location: ../adminpage.php");
    }
    else{
        header("location: ../login.php?error=1");
    }

?>