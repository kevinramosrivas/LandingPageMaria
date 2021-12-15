<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María Catering</title>
    <link rel="preload" href="css/normalize.css">
    <link rel="preload" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fuzzy+Bubbles&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shalimar&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200&family=Fuzzy+Bubbles&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style2.css">

</head>


<body>

    <header class="header">
        
        <div class="contenedor">
            <div class="barra">
                <a class="logo" href="index.php">
                    <h1 class="logo__nombre no-margin centrar-text"><img src="img/iconpage.png" class="icon_page">
                        Catering<span class="logo__bold">María </span></h1>
                </a>
                <nav class="navegacion">
                    <a class="navegacion__enlace" href="#sobre_nosotros">Nosotros</a>
                    <a class="navegacion__enlace" href="#servicios">Nuestros servicios</a>
                </nav>
            </div>
        </div>

            <div class="header__texto no-margin">
                <div  class="centrar-contenido">
                    <h2 class="contenedor">
                        La creatividad personalizada en ese día tan especial
                        <!--.<br>Confía en nuestra experiencia-->
                    </h2>
                </div>
                
            </div>
            <a href="#contactanos">
                <div class="boton_contactanos">
                    <h4 class="no-margin">Contáctanos</h4>
                </div>
            </a>
        
    </header>

    <!--CONTENIDO PRINCIPAL-->
    <div class="contenido-principal">
        <main class="informacion">
            
            <div class="sobre_nosotros" id="sobre_nosotros">
                <div class="ayuda">
                    <img class="sobre_nosotros--imagen" src="img/nosotros_img.jpeg" alt="imagen_nosotros">
                </div>
                
                <div class="sobre_nosotros--info">
                    <h3>Nosotros</h3>
                    <p class="no-margin">CATERING Maria es una empresa innovadora que
                    brinda los servicios de Catering & Buffets para
                    eventos corporativos y sociales en Lima. Brindamos una
                    atención exclusiva y personalizada; nueva en estilo y diseño,
                    cuidando los más finos detalles para que ese momento importante de tu 
                    vida se convierta en un día inolvidable.</p>
                </div>

            </div>

            <div class="servicios" id="servicios">
                <h2>Nuestros Servicios</h2>
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
        <div class="contact-wraper informacion">
            <div class="columna centrar-contenido flex-alig" >
                <div>
                    <div class="contenedor">
                        <a class="logo" href="index.php">
                            <h1 class="logo__nombre no-margin footer_titulo"><img src="img/iconpage.png" class="icon_page">
                                Catering<span class="logo__bold"> María</span></h1>
                        </a>
                    </div>
                    <div class="info-contact">
                        <!--<p><span class="bold">Informacion de contacto</span></p>-->
                        <p><span class="bold">Celular:</span> 123456</p>
                        <p><span class="bold">Correo electronico:</span> catering_maria@gmail.com</p>
                        <p><span class="bold">Local:</span> Jr. Las Flores 789</p>
                    </div>
                </div>
                
                <!--<div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.6372255167353!2d-77.04800261528989!3d-12.11176233164564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c91b579824a3%3A0xb7c3a2d42e0b150e!2sMaria%20Panela!5e0!3m2!1ses!2spe!4v1636680706744!5m2!1ses!2spe"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>-->
            </div>
            <div class="columna">
                    <h2 class="columna__h2">Consulta con Nosotros</h2>
                    <form class="contact-form centrar-contenido" id="form" method="POST" action="src/envio.php">
                        <input class="name" type="text" placeholder="Tu nombre" id="nombre" name="nombre"/><br />
                        <input class="email" type="email" placeholder="Tu email" id="email" name="email"/><br />
                        <select  id="" name="evento" class="event">
                            <ul>
                                <option disabled selected="selected">--Seleccione el tipo de evento--</option>
                                <option>Boda</option>
                                <option>Cumpleaño</option>
                                <option>Aniversario</option>
                                <option>Reunion familiar</option>
                                <option>Coctel</option>
                                <option>Cena intima</option>
                                <option>Cena ejecutiva</option>
                            </ul>
                        </select>
                        <br />
                        <div class="fecha-evento date_event">
                            <label for="">Fecha del evento</label>
                            <input class="date_event" type="date" id="date_evento" name="date_evento" />
                        </div>
                        <br />
                        <input class="invitados" type="number" id="invitados" min="0"
                            placeholder="Numero de invitados" name="invitados"/><br />
                        <textarea class="message" id="message"
                            placeholder="Detallenos mas sobre su evento" name="mensaje"></textarea><br />
                        <button type="submit" id="btnIngresar">Enviar</button>
                    </form>
            </div>
        </div>
    </footer>

    <!--CONEXION CON FIREBASE-->
    <script src="js/app.js?v=<?php echo time(); ?>"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11?v=<?php echo time(); ?>"></script>
</body>

</html>