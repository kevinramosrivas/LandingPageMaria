<?php
    include('conexiondb.php');

    echo('<pre>');
    var_dump($_POST);
    echo('</pre>');

    $id = $_POST['id'];

    if(isset($_POST['eliminar'])){
        $sql = "UPDATE clientes SET Estado = 0 WHERE `clientes`.`id` = '$id'";
        mysqli_query($conexion, $sql);
    }

    if(isset($_POST['enviar'])){
        $sql_datos = "SELECT * FROM clientes WHERE `clientes`.`id` = '$id'";
        $datos = mysqli_query($conexion,$sql_datos);
        $arregloDatos = mysqli_fetch_array($datos);

        $destino = $arregloDatos['email'];
        $asunto = "Confirmacion de servicio.- Cattering";
        $mensaje = "Estimado " . $arregloDatos['nombre'] . " hemos recibido su solicitud de servicio para el evento de " . $arregloDatos['evento'] . " con un total de " .
        $arregloDatos['invitados'] . "invitados,ha realizarse en la fecha " . $arregloDatos['date_evento'] . ".En breve un trabajador se comunicara con usted";;

        mail($destino,$asunto,$mensaje);
    }

    header("location: ../adminpage.php");
?>