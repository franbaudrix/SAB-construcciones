<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAB Construcciones</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"><div></div><div></div><div></div></div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logosab-1.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">
                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Equipo</a>
                    <a href="#" id="enlace-servicio" class="btn-header">Servicios</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Trabajos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>SAB</h1>
            <h2>Construcciones</h2>
        </div>
    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <h3>Lorem ipsum dolor sit</h3>
            <p class="after">Lorem ipsum dolor sit amet consectetur.</p>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/ejemplo-1.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>K</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/ejemplo-2.png" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>C</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/ejemplo-3.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4>M</h4>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>??Que ofrecemos?</h3>
                <p class="after">Lorem ipsum dolor sit</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/house-icon.png" alt="">
                        <h4>Lorem ipsum</h4>
                        <p>Lorem ipsum dolor sit amet consectetur.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="work contenedor" id="trabajo">
            <h3>Nuestras obras</h3>
            <p class="after">Conc?? alguna de nuestras obras</p>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='casas'>Casas</li>
                    <li class="filter" data-nombre='edificios'>Edificios</li>
                    <li class="filter" data-nombre='varios'>Varios</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work casas">
                    <div class="img-work">
                        <img src="img/casas-1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Casas</h4>
                    </div>
                </div>
                <div class="cont-work casas">
                    <div class="img-work">
                        <img src="img/casas-2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Casas</h4>
                    </div>
                </div>
                <div class="cont-work casas">
                    <div class="img-work">
                        <img src="img/casas-3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Casas</h4>
                    </div>
                </div>
                <div class="cont-work edificios">
                    <div class="img-work">
                        <img src="img/edificios-1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Edificios</h4>
                    </div>
                </div>
                <div class="cont-work edificios">
                    <div class="img-work">
                        <img src="img/edificios-2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Edificios</h4>
                    </div>
                </div>
                <div class="cont-work edificios">
                    <div class="img-work">
                        <img src="img/edificios-3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Edificios</h4>
                    </div>
                </div>
                <div class="cont-work varios">
                    <div class="img-work">
                        <img src="img/varios-1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Varios</h4>
                    </div>
                </div>
                <div class="cont-work varios">
                    <div class="img-work">
                        <img src="img/varios-2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h4>Varios</h4>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contacto">
        <center>
        <?php 
    $myemail = 'franco39239@gmail.com';
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];

    $to = $myemail;
    $email_subject = "Nuevo mensaje: $subject";
    $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
    $headers = "From: $email";

    mail($to, $email_subject, $email_body, $headers);
    echo "El mensaje se ha enviado correctamente";
    ?>
            <form method="post" action="enviar.php">
                <input type="text" name="nombre" placeholder="NOMBRE">
                <input type="email" name="email" placeholder="CORREO">
                <textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
                <input type="submit" value="ENVIAR">
            </form>
        </center>
        <div class="footer contenedor">       
            <div class="iconos">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-instagram"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
</body>
</html>