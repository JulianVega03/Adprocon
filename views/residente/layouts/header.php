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

    <header class="cabecera">
        <nav class="cabecera__content">
            <figure class="cabecera__fig">
                <a href="<?= URL ?>"><img class="cabecera__fig--img" src="<?= URL ?>public/imagen/logowhite.png"></a>
            </figure>
            <ul class="cabecera__menu">
                <li class="cabecera__item">
                    <img src="<?= URL ?>public/imagen/imgperfil.jpg">
                    <a class="cabecera__item--a" href="ayuda.php"><?= $_SESSION['user'] ?></a>
                </li>
                <a href="<?= URL ?>login/logout"><i class="fas fa-sign-out-alt" alt="salir"></i></a>
            </ul>
        </nav>
    </header>