<?php
    include('conexiondb.php');

    echo('<pre>');
    var_dump($_POST);
    echo('</pre>');
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $evento = $_POST['evento'];
    $date_evento = $_POST['date_evento'];
    $invitados = $_POST['invitados'];
    $mensaje = $_POST['mensaje'];
    echo '¡Hola ' . htmlspecialchars($_POST["nombre"]) . '!';

    if($nombre !=='' || $email !=='' || $evento !=='' || $date_evento !=='' || $invitados !=='' || $mensaje !==''){
        $sql= "INSERT INTO clientes (id,nombre,email,evento,date_evento,invitados,mensaje)
        VALUES (0,'$nombre','$email','$evento','$date_evento','$invitados','$mensaje')";
        mysqli_query($conexion,$sql);
        header("location: ../index.php");
    }
?>