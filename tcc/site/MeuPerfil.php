<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Principal</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
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

    <div class="MyProfile">
        <h1>Seu Perfil</h1>
        <div class="LayoutProfile">
            <div class="image">
                <button class="chageimage">
                    <img alt="Alterar a foto do perfil" class="change" src="../imagens/profile.png">
                </button>
            </div>
        </div>
    </div>

</body>

<script src="../styles/main.js"></script>

</html>