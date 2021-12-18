<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css?v=<?php echo time();?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">

</head>
<body>
        <div class="row">
            <div class="col-md-5 p-5 fst-quote-container text-white min-h-100vh" id="imagen">
                <div class="container">
                    <div class="container">

                        <div class="text-center mt-5">
                            <div class="d-flex justify-content-center align-items-center" id="contenedorTitulo"> 
                                <h2 class="fw-lighter ms-3 fw-bold mb-0 fst-italic text-dark">Catering Maria</h2>       
                            </div>
                        </div>
                    </div>
                    
                </div>

                
            </div>
            <div class="col-md-7 min-h-100vh d-flex align-items-center">
                <div class="container py-5">
                    <div class="d-flex justify-content-between align-self-start align-items-center ">
                        <div class="d-flex flex-column justify-content-end mb-5 me-lg-5">
                            <p style="font-size: 13px; color: #bdbdbd;" class="mb-0 me-lg-5">Cuenta Administrativa</p>
                            <p class="text-secondary mb-0 text-end me-lg-5" id="titlePhase">Login</p>
                        </div>
                    </div>
                    
                    <div class="container ml-4" id="containerLoginPageRight" method="POST" action="src/ingresar.php">
                        <div>
                            <h5 class="fw-bold fs-4" id="titleLoginPage">ADMINISTRADOR</h5>
                        </div>
                        <form role="form" action="src/ingresar.php" method="POST" class="formulario">
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input id="usuario" type="text" name="usuario" class="form-control" placeholder="Jorge">
                            </div>
                            <div class="form-group">
                                <label for="contrasenia">Contraseña</label>
                                <input id="contrasenia" type="password" name="contrasenia" class="form-control" placeholder="........" id="contrasenia">
                            </div>
                            <div class="form-group">
                                <button class="btn  btn-colors d-block w-100" type="button" onclick="mostrarContrasena()">Mostrar Contraseña</button>
                            </div>
                            <button  class = " btn btn-colors d-block w-100 " type = " submit " id="btnRegistrar">Iniciar Sesión </button>
                        </form> 
                    </div>
                        
                </div>
            </div>
        </div>
        <script src="#?v=<?php echo time(); ?>"></script>
        <script>
            function mostrarContrasena(){
                var tipo = document.getElementById("contrasenia");
                if(tipo.type == "password"){
                    tipo.type = "text";
                }else{
                    tipo.type = "password";
                }
            }
        </script>
        <!--Fotter-->
         <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time(); ?>" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- FontAwesome para iconos -->
        <script src="https://kit.fontawesome.com/57888ec9eb.js?v=<?php echo time(); ?>" crossorigin="anonymous"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
</body>
</html>