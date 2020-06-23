<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="ico/png" href="<?= URL ?>public/imagen/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>public/scss/style.css">
    <meta charset="utf-8">
    <title><?= $titulo ?></title>
</head>

<body>
    <!-- <div class="container__index"> -->
        <header class="header">
            <nav class="header__content">
                <figure class="header__fig">
                    <a href="<?= URL ?>"><img class="header__picture" src="<?= URL ?>public/imagen/logo.png"></a>
                </figure>
                <ul class="header__menu">
                    <li class="header__item">
                        <a class="header__item--a" href="ayuda.php">Ayuda</a>
                    </li>
                    <li class="header__item">
                        <a class="header__item--a" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="inicio">
            <article class="inicio__content">
                <div class="inicio__text">
                    <h1 class="inicio__text--msj">
                        Software de administración de proyectos de construcción
                    </h1>
                    <p class="inicio__text--descripcion">
                        Lorem Ipsum es un texto de marcador de posición comúnmente utilizado en las industrias gráficas, gráficas y editoriales para previsualizar diseños y maquetas visuales.
                    </p>
                    <div class="inicio__boton">
                        <a class="inicio__boton--login" href="<?= URL ?>login">Iniciar sesión</a>
                        <a class="inicio__boton--registro" href="">Registrar</a>
                    </div>
                </div>
                <figure class="inicio__fig">
                    <img class="inicio__picture" src="<?= URL ?>public/imagen/foto.jpg">
                </figure>
            </article>
        </section>

        <footer class="footer">
            <p class="footer__text">Términos y Condiciones |
                <p class="footer__text--bold"> © 2020 Obras civiles.</p>
            </p>
        </footer>
    <!-- </div> -->
    <script src="<?= URL ?>public/js/main.js"></script>
</body>

</html>