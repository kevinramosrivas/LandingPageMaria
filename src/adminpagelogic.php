<?php
    include("src/conexiondb.php");
    $sql = "SELECT * FROM `clientes`;";
    $resultado = mysqli_query($conexion,$sql);
?>