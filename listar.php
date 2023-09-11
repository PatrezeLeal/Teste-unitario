<?php

session_start();

$usuarios = $_SESSION['usuarios'];
$nome = $_SESSION['nome'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste unitário</title>
</head>
<body>
	<center>
	<div id="cadastro">
		<h3>Usuários Cadastrados</h3>
		<?php
		foreach ($usuarios as $usuario) {
			echo "<b>Nome</b>: ".$usuario["nome"]." <b>Login</b>: ".$usuario["login"];

			if($usuario["nome"] == $nome){
				echo "<b>Senha</b>" . $usuario["senha"]."<br>";
			}
			echo "<br>";//esse br e para pular depois que terminar de verificar o nome e senha do chuck
		}
		?><br>
		<a href="principal.php">Voltar</a>
	</div>
	</center>
</body>
</html>
