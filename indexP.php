<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web</title>
    <link rel="shortcut icon" href="img/alexcgdesign.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>
<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Portafolio</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
        </nav>
        <section class="textos-header">
            <h1>Inner Alert</h1>
            <h2>Pagina Web para conocer sobre Inner Alert tu mejor opción</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #ffffff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Objetivo del proyecto</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Ayudar con las enfermedades de salud mental</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                    <h3><span>2</span>Enfocarnos en la depresión</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/img1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <!-- Repite este bloque para cada imagen del portafolio -->
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Qué dicen nuestros clientes</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/face1.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Claudia Bernal</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                </div>
                <div class="card">
                    <img src="img/face2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>David Martinez</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, sapiente!</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="img/ilustracion1.svg" alt="">
                        <h3>Nuestra App</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion4.svg" alt="">
                        <h3>Asistencia profesional</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="img/ilustracion3.svg" alt="">
                        <h3>Sitios de contacto</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Teléfono</h4>
                <p>608293312</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>InnerAlert-pub@hotmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>Bogotá, Colombia</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; InnerAlert | Asistencia</h2>
    </footer>
</body>
</html>
