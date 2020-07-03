<?php
include '../class/conection.php';
include '../class/produto.php';

$nome = $_POST['nome'];
$qtdP = $_POST['qtd'];
$valorP = $_POST['valor'];

Produto::criarProduto($nome, $qtdP, $valorP, $conn);

echo "
		<script>
			window.location.href = 'http://localhost/projeto/pags/mostrar_produtos.php';
		</script>
	";

?>
