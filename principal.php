<?php

session_start();

$nome = $_SESSION['nome'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste Unitário</title>
</head>
<body>
	<center>
	<div id="boas-vindas">
		<h3>Bem vindo, <?php echo $nome; ?></h3>
	</div><br>
	<div>
		<a href="listar.php">Listar Usuário</a><br>
		<a href="sair.php">Sair</a>
	</div>
	</center>
</body>
</html>