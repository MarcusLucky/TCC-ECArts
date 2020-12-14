<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ECArts - Ajuda</title>

	<script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/help.css">
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
    
<div class="conteiner-externo">
        <h1 class="question">Podemos lhe Ajudar?</h1>
        <div class="conteiner-interno">
            <li>Principal:
                <br>
            <h2>Na aba Principal você tem a atualização das pessoas que você segue</h2>
        </li>
        <br>
        <br>
        <li>Melhores Avaliados:
            <br>
            <h2>Na aba Melhores Avaliados tem as imagens com a melhor avaliação dada por dia, semana, mês, ano e desde o inicio</h2>

        </li>
        <br>
        <br>
        <li>Ajuda:
            <br>
           <h2>Essa aba</h2>
        </li>
        <br>
        <br>
        <li>Sobre nós:
            <br>
           <h2>Exibe a aba que fala um pouco da equipe por trás do site</h2>
        </li>
        <br>
        <br>
        <li>Meu Perfil:
            <br>
           <h2>Exibe a aba que mostra sua foto e algumas de suas informações</h2>
        </li>
        <br>
        <br>
        <li>Galeria
            <br>
           <h2>Mostra as imagens postadas pelos artistas, e fotos marcada como favorito</h2>
        </li>
        <br>
        <br>
        <li>configurações:
            <br>
           <h2>Exibe a aba que deixa você editar algumas informações</h2>
        </li>
        <br>
        <br>
        <li>Sair
            <br>
           <h2>Sai do seu perfil</h2>
        </li>
        </div>
        <p> <input class="up back" type="button" value="voltar" onclick="history.back()"></p>
    </div>

</body>

<script src="../styles/main.js"></script>

</html>