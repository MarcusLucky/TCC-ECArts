<!DOCTYPE html>
<html>

<head>
    <title>ECArts - Conta Artista</title>
    <meta charset="utf-8" />
    <!--   <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>-->

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/artista.css">
    <!--<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">-->
</head>
<script>

</script>
<script>
    function funcao() {
        alert("cadastro feito com sucesso");
    }
</script>

<body>

    <div class="root">
        <a href="index.php">
            <img src="../imagens/ecarts.png" alt="logo">
        </a>
    </div>

    <h1 class="Register-Text">Registra-se</h1>


    </div>

    <header>

        <div class="principal">

            <div class="field">

                <form method="POST" action="processa.php">



                    <div class="name">
                        <label class="label-input icon-modify" for="">
                            <i class="far fa-user image-change"></i>
                            <label for="name">Nome Completo:</label>
                            <input type="text" name="name" placeholder="Nome" name="name" maxlength="40" required
                                autofocus>
                        </label>
                    </div>

                    <div class="email">
                        <label class="label-input icon-modify" for="">
                            <i class="fas fa-envelope image-change"></i>
                            <label for="Email">Email:</label>
                            <input type="text" placeholder="Email" name="email" required>
                        </label>
                    </div>

                    <div class="Password">

                        <label class="label-input icon-modify" for="">
                            <i class="fas fa-lock image-change"></i>
                            <label for="Password">Senha:</label>
                            <input type="password" name="password" placeholder="Senha" name="password" required>
                        </label>

                    </div>

                    <div class="profession">
                        <label class="label-input icon-modify profession-modify" for="">
                            <i class="fas fa-toolbox"></i>
                            <label for="label-profession"> Profissão:

                                <select name="profession">
                                    <option value disabled="disabled" class="ng-binding">Eu sou</option>
                                    <option value="artist">Artista</option>
                                    <option value="photographer">Fotógrafo(a)</option>
                                    <option value="illustrator">Ilustrador(a)</option>
                                    <option value="web-disigner">Web-Designer</option>
                                </select>
                            </label>
                        </label>
                    </div>

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
            </div>

        </div>

        <div class="second-field">
            <h1 class="title">O que é uma Conta de Artista? </h1>
            <h2 class="conteudo">
                Com essa conta você pode postar suas obras/fotos no site
                para que todos possam ver, avaliar e comentar, podendo até mesmo
                ganhar seu reconhecimento e dinheiro.
            </h2>
        </div>

        <input type="submit" value="Registrar-se" class="btn">

        </form>

        </div>


        <div class="change"> <a class="a-change" href=" PRegister.php">Conta Pessoal</a></div>

    </header>
</body>

</html>