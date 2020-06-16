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
    <div class="container__index">
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

        <section class="login">
            <article class="login__content">
                <div class="login__form">
                    <div class="login__form__content">
                        <form action="<?= URL ?>login/loggear" method="post">
                            <h2 class="login__form__content--h2">Iniciar sesión</h2>
                            <!-- <div class="login__form__container-cmp">
                    <input class="login__form__content--cmp" type="number" id="codigo" name="username" placeholder="Código" required>
                </div> -->
                            <div class="login__form__container-cmp">
                                <input class="login__form__content--cmp" type="text" id="documento" name="username" placeholder="Documento" required>
                            </div>
                            <div class="login__form__container-cmp">
                                <input class="login__form__content--cmp" type="password" id="clave" name="clave" placeholder="Contraseña" required>
                            </div>
                            <input class="login__form__content--btn" type="submit" id="continuar" name="enviar" value="Continuar">
                            <a class="login__form__content--a" href="">¿Olvidaste tu clave?</a>
                        </form>
                    </div>
                </div>
                <figure class="login__fig">
                    <img class="login__img" src="<?= URL ?>public/imagen/imglogin.jpg">
                </figure>
            </article>
        </section>

        <footer class="footer">
            <p class="footer__text">Términos y Condiciones |
                <p class="footer__text--bold"> © 2020 Obras civiles.</p>
            </p>
        </footer>
    </div>
    <script src="<?= URL ?>public/js/main.js"></script>
</body>

</html>