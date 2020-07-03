<?php
	include '../class/conection.php';
	include '../class/produto.php';

	$cod = $_GET['cod'];

	Produto::apagarProduto($cod, $conn);
	
	echo "
		<script>
			window.location.href = 'http://localhost/projeto/pags/mostrar_produtos.php';
		</script>
	";
?>
