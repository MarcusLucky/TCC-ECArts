<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Meu Perfil</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/login.css">

</head>
<script>

</Script>

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
            <li><a href="#">sair</a></li>
            <li><img class="img-logo" src="../imagens/ecarts.png" alt="logo"></li>
        </ul>
    </aside>

    <form action="">

        <h1>Entrar na Conta</h1>
        <c><img src="../imagens/ecarts.png" alt="logo"></c>
        <legend>
            <div class="field-group">
                <div class="field">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" patter="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" />
                </div>

                <div class="field-group">
                    <div class="field">
                        <label for="pass">Senha:</label>
                        <input type="password" id="pass" menlight="9" />
                    </div>
        </legend>


        <div class="social-media">

            <a class="link-social-media" href="#">
                <li class="item-social-media">
                    <i class="fab fa-facebook-f"></i>
                </li>
            </a>

            <a class="link-social-media" href="#">
                <li class="item-social-media">
                    <i class="fab fa-google"></i>
                </li>
            </a>

            <a class="link-social-media" href="#">
                <li class="item-social-media">
                    <i class="fab fa-linkedin-in"></i>
                </li>
            </a>

            <a class="link-social-media" href="#">
                <li class="item-social-media">
                    <i class="fab fa-twitter"></i>
                </li>
            </a>

        </div>

        <button value="validar">

            <a href="index.html">entrar</a>

        </button>
    </form>
    </div>
</body>

<script src="../styles/main.js"></script>

</html>