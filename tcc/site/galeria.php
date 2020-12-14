<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Galeria</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/galeria.css">
</head>

<body>

<nav class="nav-main">
        <div class="btn-toggle-nav" onclick="toggleNav()"></div>
        <ul class="top">
            <li><a href="index.php">Principal</a></li>
            <li><a href="TopRating.php">Melhores Avaliados</a></li>
            <li class="help"><a href="help.php">Ajuda</a></li>
            <li class="abous"><a href="AboutUs.php">Sobre Nós</a></li>
        </ul>
    </nav>

    <aside class="nav-sidebar">
        <ul>
            <li><span>Bem-vindo</span></li>
            <li><a href="MeuPerfil.php">Meu Perfil</a></li>
            <li><a href="Galeria.php">Galeria</a></li>
            <li><a href="Config.php">configurações</a></li>
            <li><a>upload</a></li>
            <li><a class="exit">sair</a></li>
            <li><img class="img-logo" src="../imagens/ecarts.png" alt="logo"></li>
        </ul>
    </aside>

    <div class="image-layout">

        <div class="border-img">
            <img class="page-img" src="../fotos Marcus/IMG_2950.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Foto da lua</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img">
            <img class="page-img" src="../fotos Marcus/IMG_2883.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Entardecer</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img">
            <img class="page-img" src="../fotos Marcus/IMG_2976.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Sol</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img">
            <img class="page-img" src="../fotos Marcus/IMG_2924.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Nevoa</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img second-layer">
            <img class="page-img" src="../fotos Marcus/IMG_2984.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Lua</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img second-layer">
            <img class="page-img" src="../fotos Marcus/IMG_2860.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Nuvens 1</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img second-layer">
            <img class="page-img" src="../fotos Marcus/IMG_2909.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Nuvens 2</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

        <div class="border-img second-layer">
            <img class="page-img" src="../fotos Marcus/IMG_3012.JPG" alt="segurador" width="90" height="90">
            <a class="info-img">Lunar na cidade</a>
            <a class="who-post">Marcus Vinicius</a>
        </div>

    </div>

</body>

<script src="../styles/main.js"></script>

</html>