<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Mascota</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar">
        <!-- Nabvar header -->
        <header class="navbar-header" id="navbar-header">
            <a href="index.php" class="brand-link is-size-3">
                <i class="fas fa-dog"></i>
                <span class="brand">Mi Mascota</span>
            </a>
            <button class="navbar-menu-mobile open is-size-3 is-hidden-desktop" id="navbar-menu-mobile">
                <i class="zmdi zmdi-menu"></i>
            </button>
        </header>
        <!-- Navbar container -->

        <ul class="navbar-container" id="navbar-container">
            <li class="navbar-item">
                <a data-scroll href="Index.php" id="inicio" class="navbar-a navbar-link-">Inicio</a>
            </li>
            <li class="navbar-item">
                <a data-scroll href="index2.php" id="acercaDe" class="navbar-a">Avisos de Mascotas</a>
            </li>
            <li class="navbar-item">
                <a data-scroll href="#section2" id="section" class="navbar-a">Detalles de Mi Mascota</a>
            </li>
            <li class="navbar-item">
                <a data-scroll href="registro_usuario.php" id="photos" class="navbar-a">Registrarse</a>
            </li>
            
            <li class="navbar-item">
                <a data-scroll href="index2.php" id="form" class="navbar-a">Iniciar Sesión</a>
            </li>
        </ul>

    </nav>

    <!-- Sección del carrusel -->

    <div class="section-body" id="top">
        <div class="slide-contenedor">

            <div class="miSlider fade">
                <div class="slider-body">

                    <h1 class="is-size-3-mobile has-text-weight-bold slider-title">¡ENCONTREMOS A TU MASCOTA!</h1>
                    <p class="description-slider is-size-7-mobile"> Te ayudamos a encontrar a tu mascota perdida </p>
                </div>

                <img src="img/mascota1.jpeg" alt="">
            </div>

            <div class="miSlider fade">
                <div class="slider-body">

                    <h1 class="is-size-3-mobile has-text-weight-bold slider-title">¡ENCONTREMOS A TU MASCOTA!</h1>
                    <p class="description-slider is-size-7-mobile"> Te ayudamos a encontrar a tu mascota perdida </p>
                </div>
                <img src="img/mascota2.png" alt="">
            </div>

            <div class="miSlider fade">
                <div class="slider-body">

                    <h1 class="is-size-3-mobile has-text-weight-bold slider-title">¡ENCONTREMOS A TU MASCOTA!</h1>
                    <p class="description-slider is-size-7-mobile"> Te ayudamos a encontrar a tu mascota perdida </p>
                </div>
                <img src="img/mascota8.jpg" alt="">
            </div>

            <div class="direcciones">
                <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
                <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
            </div>
            <div class="dots">
                <span class="dot active" onclick="posicionSlide(1)"></span>
                <span class="dot" onclick="posicionSlide(2)"></span>
                <span class="dot" onclick="posicionSlide(3)"></span>
            </div>
        </div>

        <!-- About me -->
        <br>
        <!-- About me -->
        <div class="container" id="about">
            <div class="columns is-vcentered">
                <div class="column is-half">
                    <div class="about-me">
                        <figure class="image">
                            <img class="about-me-img" src="img/mascota14.jpg" alt="">
                        </figure>
                    </div>
                </div>
                <div class="column is-half section-about-me">
                    <h1 class="title is-size-3-mobile is-size-2-tablet has-text-weight">VENTAJAS</h1>
                    <h5 class="subtitle is-size-6-mobile is-size-5-tablet separator">Mi Mascota</h5>
                    <p class="text is-size-7-mobile">Las probabilidades de encontrar a tu mascota aumentarán ya que la información será vista por personas próximas a donde se perdió.</p>
                    <p class="text is-size-7-mobile">
                        Quienes viven en el lugar de la pérdida compartirán la información haciendo que ésta sea vista por muchas más personas en el sector.
                    </p>
                </div>
            </div>
        </div>

        <br>

        <div id="section2" class="hero my-hero" style="--banner: url(../img/mascota22.jpg); --bg-atachment: fixed;">
            <div class="container-hero">

                <div class="container">
                    <div class="columns is-multiline">
                        <div class="column is-full has-text-centered">
                            <h1 class="title has-text-white is-size-3-mobile is-size-1-tablet">
                                Mi Mascota
                            </h1>
                            <h5 class="subtitle is-size-5">
                                Detalles
                            </h5>
                        </div>
                        <div class="column">
                            <div class="banner-container">
                                <span class="container-icon">
                                    <i class="fas fa-cat is-size-1 "></i>
                                </span>
                                <h4 class="is-size-5 has-text-centered has-text-weight-bold">Misión</h4>
                                <p class="has-text-centered is-size-7-mobile">Contribuir a la mejora del bienestar de las mascotas, a través de la concentración y difusión de la información sobre extravíos y rescates en un solo sitio.</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="banner-container">
                                <span class="container-icon">
                                    <i class="fas fa-paw is-size-1"></i>
                                </span>
                                <h4 class="is-size-5 has-text-centered has-text-weight-bold">Visión</h4>
                                <p class="has-text-centered is-size-7-mobile">Convertirnos en un sitio de referencia y confianza para el reencuentro entre dueños y mascotas, concientizando y mejorando la educación de las personas.</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="banner-container">
                                <span class="container-icon">
                                    <i class="fas fa-dog is-size-1"></i>
                                </span>
                                <h4 class="is-size-5 has-text-centered has-text-weight-bold">Objetivo </h4>
                                <p class="has-text-centered is-size-7-mobile">Creamos el sistema web para que la información de tu mascota perdida sea vista directamente por miles de personas que visitan el lugar donde se perdió.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Galería -->

        <div class="container" id="gallery">
            <div class="columns is-multiline">
                <div class="column has-text-centered is-full">
                    <h1 class="title is-size-3-mobile is-size-1-tablet has-text-weight">Mis Mascotas</h1>
                    <h5 class="subtitle is-size-6"></h5>
                </div>
                <div class="column">
                    <div class="gallery-container" id="gallery-container">
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/gallery-1-thumb.jpg" alt="">
                            </figure>
                        </div>
                        
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/gallery-2-thumb.jpg" alt="">
                            </figure>
                        </div>
                        
                        <div class="gallery-item">
                            <figure class="image">

                                <img class="gallery-img" src="img/refugio17.jpg" alt="">
                            </figure>
                        </div>
                        
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/refugio12.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/refugio10.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/refugio16.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/refugio1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/mascota12.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/refugio12.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/refugio11.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/gallery-11-thumb.jpg" alt="">
                            </figure>
                        </div>
                        <div class="gallery-item">
                            <figure class="image">
                                <img class="gallery-img" src="img/gallery-4-thumb.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contacto -->
        <div class="container" id="contacto">
            <div class="columns is-multiline">
                <div class="column has-text-centered is-full">
                    <h1 class="title is-size-3-mobile is-size-1-tablet has-text-weight">Contactame</h1>
                    <h5 class="subtitle is-size-6">Enviame un mensaje</h5>
                </div>
                <div class="column">
                    <form action="#">
                        <div class="columns is-multiline">
                            <div class="column is-half">
                                <div class="field">
                                    <label class="label">Nombre Completo</label>
                                    <div class="control">
                                        <input class="is-radiusless is-shadowless input is-medium" type="text" placeholder="Nombre completo">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <labe class="label">Número de teléfono</label>
                                            <input class="is-radiusless is-shadowless input is-medium" type="text" placeholder="Número de telefono">
                                    </div>
                                </div>
                            </div>
                            <div class="column is-half">
                                <div class="field">
                                    <div class="control">
                                        <label class="label">Correo Electrónico</label>
                                        <input class="is-radiusless is-shadowless input is-medium" type="text" placeholder="Correo Electrónico">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <button class="is-radiusless is-shadowless button is-medium is-fullwidth" type="button">
                                            Enviar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <!-- footer -->
        <!-- Footer -->
        <footer class="my-footer">
            <div class="hero my-hero" style="--banner: url(../img/mascota3.jpg); --bg-atachment: none;">
                <br>
                <br>
                <center>
                    <h1>Realizado Por : </h1>
                    <br>                   
                    <h1>Ariel Alexis Choquecallata Adriazola</h1>
                    <h1>Marcos Quispe Paco</h1>
                </center>
                <div class="container-hero">
                    <div class="columns is-multiline">
                        <div class="column is-full has-text-centered">
                            <span class="has-text-white">
                                <i class="fas fa-dog is-size-1 "></i>
                            </span>
                        </div>
                        <div class="column is-full">
                            <ul class="my-footer-ul">
                                <li class="my-footer-item">
                                    <a href="https://www.facebook.com/" class="my-footer-link facebook">
                                        <i class="zmdi zmdi-facebook"></i>
                                    </a>
                                </li>
                                <li class="my-footer-item">
                                    <a href="https://www.instagram.com/" class="my-footer-link instagram">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </li>
                                <li class="my-footer-item">
                                    <a href="https://twitter.com/" class="my-footer-link twitter">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="column has-text-centered is-size-7-mobile  is-full">
                            <p class="footer-p has-text-white">© 2021 Mis Mascotas. Los Seres Mas Queridos en el Hogar...!!! </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- // footer -->

        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/main.js"></script>

</body>

</html>