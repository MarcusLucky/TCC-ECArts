<!DOCTYPE html>
<html>

<head>
    <title>ECArts - Conta Artista</title>
    <meta charset="utf-8" />
    <!--   <link href="ContatoEstilo.css" rel="stylesheet" media="all" />
    <script src="JavaScript1.js"></script>-->

    <link rel="stylesheet" href="../styles/artista.css">
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
        <b href="index.html">
            <img src="../imagens/ecarts.png" alt="logo">
        </b>
    </div>

    <form name="meu_form">
        <h1>Registra-se</h1>

        <header>
            </div>
            <div>
                <div class="name">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" placeholder="Coloque seu nome aqui" name="name" required>

                </div>
                <div class="lastname">
                    <label for="lastname">Sobrenome:</label>
                    <input type="text" id="lastname" placeholder="Coloque seu Sobrenome aqui" name="lastname" required>
                </div>
                <div class="email">
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" placeholder="exemplo@email.com" name="Email" required>
                </div>
                <div class="Password">
                    <label for="password">Senha:</label>
                    <h6>minimo de 8 caracters</h6>
                    <input id="password" type="password" inputmode="numeric" maxlength="10" Size="10" pattern="[0-9]+$">
                </div>

                <div class="profession">
                    <label for="profession"> Profissão:</label>
                    <select>
                        <option value disabled="disabled" class="ng-binding">Eu sou</option>
                        <option value="artist">Artista</option>
                        <option value="photographer">Fotógrafo(a)</option>
                        <option value="illustrator">Ilustrador(a)</option>
                        <option value="web-disigner">Web-Disigner</option>
                    </select>
                </div>

                <button onclick="funcao()">Clique aqui</button>
                <p id="demo"></p>

                <div> <a href="personallogin.html">conta pessoal</a></div>
        </header>

        </div>
</body>

</html>