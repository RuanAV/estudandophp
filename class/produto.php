<?php

include '../class/conection.php';

class Produto 
{
	
	function showProdutos($conn)
	{
		$query = "SELECT * FROM produto";
		$stmt = $conn->prepare($query);
  		$stmt->execute();
		
		while ($fetch = $stmt->fetch(PDO::FETCH_ASSOC)) {
			echo "
				<tr>
					<td>
					".$fetch['descricao']."
					</td>
					<td>
					".$fetch['estoque']."
					</td>
					<td>
					".$fetch['preco']."
					</td>
					<td>
						<a href='../action/apagar.php?cod=".$fetch['codigo']."'>X</a>
					</td>
				</tr>
			";
			
		}
	}

	function apagarProduto($cod, $conn)
	{
		$query = "DELETE FROM produto WHERE codigo = $cod";
		$stmt = $conn->prepare($query);
  		$stmt->execute();
	}

	function criarProduto($nome, $qtd, $valor, $conn)
	{
		$query = "INSERT INTO produto (descricao, estoque, preco) VALUES ('$nome', $qtd, $valor)";
		$stmt = $conn->prepare($query);
  		$stmt->execute();
	}
}

?>