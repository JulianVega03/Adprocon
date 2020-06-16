<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="icon" type="ico/png" href="<?= URL ?>public/imagen/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?= URL ?>public/scss/style.css">
    <script src="https://kit.fontawesome.com/0dc3b1d201.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>SOFTWARE OBRAS CIVILES</title>
    <link rel="icon" type="ico/png" href="<?= URL ?>public/imagen/favicon.png">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="modal">
        <div class="modal__content">
            <form action="" method="">
                <p>Agregar proyecto</p>
                <div>
                    <input type="number" placeholder="Código proyecto" id="codeproyecto" name="codeproyecto" required>
                </div>
                <div>
                    <input type="text" placeholder="Nombre" id="nombreproyecto" name="nombreproyecto" required>
                </div>
                <div>
                    <input type="text" placeholder="Ubicación" id="ubicacion" name="ubicacion" required>
                </div>
                <div>
                    <input type="text" placeholder="Cuadrilla" id="cuadrilla" name="cuadrilla" required>
                </div>
                <div>
                    <input type="date" placeholder="Fecha" id="fecha" name="fecha" required>
                </div>
                <button class="btn-red" type="submit">Agregar</button>
                <button class="btn-gris" type="reset">Borrar información</button>
                <i class="fas fa-times-circle cerrar"></i>
            </form>
        </div>
    </div>
    <header class="cabecera">
        <nav class="cabecera__content">
            <figure class="cabecera__fig">
                <a href="<?= URL ?>"><img class="cabecera__fig--img" src="<?= URL ?>public/imagen/logowhite.png"></a> 
            </figure>
            <ul class="cabecera__menu">
                <li class="cabecera__item">
                    <img src="<?= URL ?>public/imagen/imgperfil.jpg">
                    <a class="cabecera__item--a" href="ayuda.php">Brayan Ismael Peñaranda Rincón</a>
                </li>
                <i class="fas fa-bars"></i>
            </ul>
        </nav>
    </header>

    <section class="panel-redisente">
        <article class="panel-redisente__content">
            <div class="panel-redisente__projects">
                <div class="panel-redisente__top">
                    <h2 class="panel-redisente__projects--h2">Proyectos</h2>
                </div>
                <div class="panel-redisente__buscar">
                    <input id="buscar" type="text" placeholder="Código de proyecto" name="buscar">
                    <button type="submit">Buscar</button>
                </div>
                <div class="panel-redisente__bottom">
                    <a class="panel-redisente__bottom__post" href="proyecto.html">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>
                    <a class="panel-redisente__bottom__post" href="">
                        <div>
                            <i class="fas fa-folder-open"></i>
                            <p class="panel-redisente__bottom__post--txt">Nombre del proyecto</p>
                        </div>
                    </a>

                </div>
            </div>
            <div>
                <div class="agregar-proyecto">
                    <div class="detalles-proyecto__content agregar-proyecto__content">
                        <div class="agregar-proyecto__title abrir">
                            <p>Agregar proyecto</p>
                            <!-- <span class="icon-notification"></span> -->
                            <p>
                                <i class="fas fa-plus"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="detalles-proyecto">
                    <div class="detalles-proyecto__content">
                        <div class="detalles-proyecto__title">
                            <p>Detalles</p>
                            <!-- <span class="icon-notification"></span> -->
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <li><i class="fas fa-folder-open"></i>Proyecto</li>
                        <li><i class="fas fa-user"></i>Persona encargada</li>
                        <li><i class="far fa-file-alt"></i>Descripción</li>
                        <li><i class="far fa-calendar-alt"></i>Fecha creación</li>
                        <div class="acciones-proyecto">
                            <div>
                                <i class="fas fa-trash-alt"></i>
                                <i class="far fa-edit"></i>
                            </div>
                            <a href="">Visualizar</a>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <footer class="footer-perfil">
        <div>
            <p>Copyright 2020. Obras civiles</p>
        </div>
    </footer>
    <script src="<?= URL ?>public/js/main.js"></script>
</body>

</html>