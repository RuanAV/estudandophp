<?php
	include '../class/conection.php';
	include '../class/usuario.php';

	$login = $_POST['login'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confSenha = $_POST['conf-senha'];

	//Produto::apagarProduto($login, $email, $senha, $conn);
	
	echo "
		<script>
			console.log(".$login.");
		</script>
	";
?>
