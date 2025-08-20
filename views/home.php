<body>
	<div class="login-card">
		<h1>Bem-vindo</h1>
		<form method="post" action="login.php">
			<label for="email">Nome</label>
			<input type="text" id="nome" name="usuario" placeholder="Digite seu nome">

			<label for="senha">Senha</label>
			<input type="password" id="senha" name="senha" placeholder="Digite sua senha">

			<input type="submit" value="Entrar" class="btn-entrar">
		</form>

		<a href="#" class="link-senha">Esqueceu a senha?</a>

		<?php if (isset($_GET['erro'])){ ?>
			<div class="alerta">Usuário e/ou senha inválido(s).</div>
		<?php } ?>
	</div>
</body>