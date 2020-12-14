<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<title> configuração </title>
	<h1 align="center"> config </h1>

	<link rel="stylesheet" href="../styles/styles.css">
	<link rel="stylesheet" href="../styles/config.css">
</head>

<Script>
	function voltar() {

	}
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
            <li><a>upload</a></li>
            <li><a href="#" class="exit">sair</a></li>
            <li><img class="img-logo" src="../imagens/ecarts.png" alt="logo"></li>
        </ul>
    </aside>


	<div class="up-div">
		<p><Button class="up chage-photo" onclick="mudar"> mudar foto de Perfil</Button></p>
		<p><Button class="up delete-perfil" onclick="Apagar">Apagar conta</button>
			<!-- ao clicar na imagem voce pode visualizala -->
			<Button class="up notification" onclick="notific"> Notificação </button></p>
		<p><button class="up add-card" onclick="">Adiconar cartão</button></p>
		<p> <input class="up back" type="button" value="voltar" onclick="history.back()"></p>
	</div>
	<form id="re">
		<table class="table-dados" align="center" style="border:4px double;" width="600" height="300">
			<tr>
				<th align="left"> Dados Pessoais</th>
			</tr>
			<tr>
				<td align="right"> Novo Nome: </td>
				<td> <input class="input-form" type="text" required="" name="nome" size="30" placeholder="Nome completo"
						maxlength="40"> </td>
			</tr>

			<tr>
				<td align="right"> Nova senha:</td>
				<td><input class="input-form password" type="password" name="Senha" size="30" maxlength="8"> </td>
			</tr>

			<tr>
				<td align="right"> Tel:</td>
				<td><input class="input-form" type="text" size="30" maxlength="9"> </td>
			</tr>

			<tr>
				<td align="right"> E-Mail:</td>
				<td><input class="input-form" type="text" name="email" size="30"></td>
			</tr>
		</table>

		<table class="table-conta" align="center" style="border:4px double;" width="600" height="50">
			<tr>
				<th valign="top" align="left"> tipo de conta:</th>
			</tr>
			<tr>
				<td valign="top"> Conta: <br />
					<select class="select-accont" name="serie">
						<option> escolha o seu no registro</option>
						<optgroup label="escolha">
							<option> empresarial</option>
							<option> Artistica</option>
							<option> Usuario</option>
					</select>
			</tr>
		</table>
		<p align="center">
			<br />
			<label>
				<input class="button save" type="submit" name="Enviar" value="Salvar" />
			</label>

			<label>
				<input class="button clear" type="reset" name="limpar" value="Limpar Campos" />
			</label>
	</form>
</body>

<script src="../styles/main.js"></script>

</html>