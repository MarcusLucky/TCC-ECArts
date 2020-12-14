<!DOCTYPE html>
<html>

<head>

    <title>ECArts - Conta Pessoal</title>
    <meta charset="utf-8" />
    <!--   <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>-->
    <link rel="stylesheet" href="../styles/pessoal.css">
</head>
<script>
    function funcao() {
        alert("cadastro feito com sucesso");
    }
</script>

<body>
    <div class="root">
        <b href="home.html">
            <img src="../imagens/ecarts.png" alt="logo">
        </b>
    </div>
    <form name="meu_form">
        <h1>Registra-se</h1>

        <header>
            <div>
                <div class="username">
                    <label for="username">Nome:</label>
                    <input type="text" id="username" placeholder="Seu Nome" name="username" required>
                </div>
                <div class="sobrenome">
                    <label for="sobrenome">sobrenome:</label>
                    <input type="text" id="sobrenome" placeholder="Seu Sobrenome" name="sobrenome" required>
                </div>
                <div class="CPF">
                    <label for="CPF">CPF:</label>
                    <input type="text" id="CPF" placeholder="000.000.000-00" name="CPF" required>
                </div>
                <div class="email">
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" placeholder="exemplo@email.com" name="Email" required>
                </div>
                <div class="Password">
                    <label for="password">Senha:</label>
                    <h6>minimo de 8 caracteres</h6>
                    <input id="password" type="password" inputmode="numeric" maxlength="10" Size="10" pattern="[0-9]+$">
                </div>

                <button onclick="funcao()">Clique aqui</button>
                <p id="demo"></p>

                <a href="artistlogin.html">conta de artista</a>

        </header>




</body>

</html>