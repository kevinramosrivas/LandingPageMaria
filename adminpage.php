<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/styletable.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php include("src/adminpagelogic.php")?>
        <table summary="Informacion de clientes">
            <caption>Informacion de clientes</caption>
            <thead>
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Evento</th>
                <th scope="col">F.evento</th>
                <th scope="col">N° invitados</th>
                <th scope="col">Mensaje</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($clientes  = mysqli_fetch_array($resultado)){
                  ?>
                <tr>
                  <td><?php echo $clientes['nombre']?></td>
                  <td><?php echo $clientes['email']?></td>
                  <td><?php echo $clientes['evento']?></td>
                  <td><?php echo $clientes['date_evento']?></td>
                  <td><?php echo $clientes['invitados']?></td>
                  <td><?php echo $clientes['mensaje']?></td>
                </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
    </body>

</html>