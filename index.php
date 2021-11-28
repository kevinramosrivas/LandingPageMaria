<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Catering</title>
    <link rel="preload" href="css/normalize.css">
    <link rel="preload" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">

</head>


<body>

    <header class="header">
        
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.html">
                    <h1 class="logo__nombre no-margin centrar-text"><img src="img/iconpage.png" class="icon_page">
                        Catering<span class="logo__bold"> María </span></h1>
                </a>
                <nav class="navegacion">
                    <a class="navegacion__enlace">Nosotros</a>
                    <a class="navegacion__enlace">Nuestros servicios</a>
                </nav>
            </div>
        </div>

        <div class="header__texto">
            <h2 class="no-margin">La creatividad personalizada en ese día tan especial.<br>Confía en nuestra experiencia
            </h2>
        </div>

        <a href="#contactanos">
            <div class="boton_contactanos">
                <h4>Contáctanos</h4>
            </div>
        </a>
    </header>

    <!--CONTENIDO PRINCIPAL-->
    <div class="contenido-principal">
        <main class="informacion">
            
            <div class="sobre_nosotros">
                <div class="ayuda">
                    <img class="sobre_nosotros--imagen" src="img/nosotros_img.jpeg" alt="imagen_nosotros">
                </div>
                
                <div class="sobre_nosotros--info">
                    <h3>Nosotros</h3>
                    <p>CATERING Maria es una empresa innovadora que
                    brinda los servicios de Catering & Buffets para</p><p>
                    eventos corporativos y sociales en Lima. Brindamos una
                    atención exclusiva y personalizada; nueva en estilo y diseño,</p>
                    <p class="no-margin">cuidando los más finos detalles para que ese momento importante de tu 
                    vida se convierta en un día inolvidable.</p>
                </div>

            </div>

            <div class="servicios">

                <section class="servicio__criollo servicio--item">
                        <!--<img class="servicio--imagen" src="/img/criollo.jpeg" alt="buffet_criollo">  --> 
                        <div class="sombra">
                            <p class="sombra__titulo">Buffet Criollo</p>
                        </div>     
                </section>

                <section class=" servicio__marino servicio--item">
                   <!-- <img class="servicio--imagen" src="/img/buffet_marino.jpeg" alt="buffet_marino">  -->
                   <div class="sombra">
                         <p class="sombra__titulo">Buffe Marino</p>
                   </div>  
                </section>

                <section class=" servicio__internacional servicio--item">
                    <!-- <img class="servicio--imagen" src="/img/inter.jpeg" alt="buffet_marino">  -->
                    <div class="sombra">
                        <p class="sombra__titulo">Buffet Internacional</p>
                    </div>  
                </section>


            </div>

        </main>
    </div>
  
    <footer class="footer" id="contactanos">
        <div class="contact-wraper">
            <div class="columna">
                <div class="contenedor">
                    <a class="logo" href="index.html">
                        <h1 class="logo__nombre no-margin footer_titulo"><img src="img/iconpage.png" class="icon_page">
                            Catering<span class="logo__bold"> María</span></h1>
                    </a>
                </div>
                <div class="info-contact">
                    <p><span class="bold">Informacion de contacto</span></p>
                    <p><span class="bold">Celular:</span> 123456</p>
                    <p><span class="bold">Correo electronico:</span> catering_maria@gmail.com</p>
                    <p><span class="bold">Local:</span> Jr. Las Flores 789</p>
                </div>
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.6372255167353!2d-77.04800261528989!3d-12.11176233164564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c91b579824a3%3A0xb7c3a2d42e0b150e!2sMaria%20Panela!5e0!3m2!1ses!2spe!4v1636680706744!5m2!1ses!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="columna" style="color: white;">
                <div class="formulario">
                    <form method="POST" class="contact-form" id="form" action="src/envio.php" novalidate="">
                        <label for="nombre" class="texto_blanco">Nombre</label><br />
                        <input class="name" type="text" placeholder="nombre" id="nombre" name="nombre"/><br />
                        <label for="email" class="texto_blanco">Email</label><br />
                        <input class="email" type="email" placeholder="email" id="email" name="email"/><br />
                        <label for="event" class="texto_blanco">Tipo de evento</label><br />
                        <input class="event" type="text" placeholder="Tipo de evento" id="evento" name="evento"/><br />
                        <label for="date_event" class="texto_blanco">Fecha del evento</label><br />
                        <input class="date_event" type="date" id="date_evento" name="date_evento"/><br />
                        <label for="invitados" class="texto_blanco">Cantidad de invitados</label><br />
                        <input class="invitados" type="number" id="invitados" name="invitados" placeholder="Escriba la cantidad de invitados" /><br />
                        <label for="message" class="texto_blanco">Mensaje</label><br />
                        <textarea class="message" id="mensaje" name="mensaje" placeholder="Escriba aqui su mensaje"></textarea><br />
                        <button type="submit" id="btnIngresar">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/app.js?v=<?php echo time(); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
</body>

</html>