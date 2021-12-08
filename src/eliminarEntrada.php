<?php
    include('conexiondb.php');

    echo('<pre>');
    var_dump($_POST);
    echo('</pre>');
    $id = $_POST['id'];


    $sql="DELETE FROM `clientes` WHERE `clientes`.`id` = '$id'";
    mysqli_query($conexion,$sql);
    header("location: ../adminpage.php");
?>