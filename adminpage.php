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
  <link rel="stylesheet" href="css/header.css" type="text/css">
  <link rel="stylesheet" href="css/table2.css">
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

  <div class="table-responsive">
    <table summary="Informacion de clientes" class="table table-hover table-bordered table-striped">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Evento</th>
          <th scope="col">Fecha evento</th>
          <th scope="col">N° invitados</th>
          <th scope="col">Mensaje</th>
          <th scope="col">Revisión</th>
          <th scope="col">Envio</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($clientes  = mysqli_fetch_array($resultado)) {
        ?>
          <tr>
            <form method="POST" action="src/eliminarEntrada.php">
              <?php if ($clientes['Estado'] == 1) { ?>
                <td class="idCliente"><input value="<?php echo $clientes['id'] ?>" name="id" readonly></td>
                <td><?php echo $clientes['nombre'] ?></td>
                <td><?php echo $clientes['email'] ?></td>
                <td><?php echo $clientes['evento'] ?></td>
                <td><?php echo $clientes['date_evento'] ?></td>
                <td><?php echo $clientes['invitados'] ?></td>
                <td><?php echo $clientes['mensaje'] ?></td>
                <td><button name='eliminar' class="eliminarButton" type="submit">Eliminar</button></td>
                <td><button name='enviar' class="enviarButton" type="submit">Enviar</button></td>
              <?php } ?>
            </form>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- FontAwesome para iconos -->
  <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
</body>

</html>