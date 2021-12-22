<?php
session_start();
if (!isset($_SESSION['datos admin'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/table.css" type="text/css">
  <link rel="stylesheet" href="css/header.css" type="text/css">
</head>

<body>
  <?php include("src/adminpagelogic.php") ?>

  <header class="header">
    <div class="contenido-header">
      <h1 class="titulo">Administracion de los clientes</h1>
      <div class="derecha">
        <button class="cerrarButton"><a href="src/cerrar_sesion.php">Cerrar Sesion</a></button>
      </div>
    </div>
  </header>

  <div class="tabla" style="overflow-x:auto;">
    <table summary="Informacion de clientes">
      <thead>
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Evento</th>
          <th scope="col">Fecha evento</th>
          <th scope="col">N° invitados</th>
          <th scope="col">Mensaje</th>
          <th scope="col">Revisión</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($clientes  = mysqli_fetch_array($resultado)) {
        ?>
          <tr>
            <form method="POST" action="src/eliminarEntrada.php">
              <td class="idCliente"><input value="<?php echo $clientes['id'] ?>" name="id" readonly></td>
              <td class="alt"><?php echo $clientes['nombre'] ?></td>
              <td><?php echo $clientes['email'] ?></td>
              <td class="alt"><?php echo $clientes['evento'] ?></td>
              <td><?php echo $clientes['date_evento'] ?></td>
              <td class="alt"><?php echo $clientes['invitados'] ?></td>
              <td><?php echo $clientes['mensaje'] ?></td>
              <td><button class="eliminarButton" type="submit">Eliminar</button></td>
            </form>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="js/adminPage.js?v=<?php echo time(); ?>"></script>
</body>

</html>