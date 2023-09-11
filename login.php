<?php

session_start();

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$usuarios = array(	
	array("login" => "chuck", "senha" => 000000, "nome" => "Chuck Norris"),
	array("login" => "teste", "senha" => 123456, "nome" => "Tester"),
	array("login" => "patreze", "senha" => 1234, "nome" => "Patreze"),
	array("login" => "teste", "senha" => 1234, "nome" => "Bolota"),
);
$_SESSION['usuarios'] = $usuarios;

foreach ($usuarios as $usuario) {	
	if ($login == $usuario["login"] && $senha == $usuario["senha"]) {
		session_start();
		$_SESSION['nome'] = $usuario["nome"];
		header('Location: principal.php');
	} else {
		echo '<script>alert("Usuário ou senha incorretos");
			window.location="index.php";
			</script>';
	}
}

?>