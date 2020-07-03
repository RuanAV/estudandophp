<?php
	include '../class/conection.php';
	include '../class/produto.php';

	//$query = "SELECT * FROM produto";
	//$result = mysqli_query($conn, $query);
	//$produto = Produto;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Produtos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="It2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 text-center">
				<h1><strong>LISTA DE PRODUTOS</strong></h1>
			</div>		
		</div>
		<div class="row">
			<div class="col-xl-2"><br></div>
			<div class="col-xl-8" align="center" style="margin-top: 40px">
				<table class="table table-striped">
				  	<thead>
				    	<tr>
				      		<th scope="col">Nome</th>
				      		<th scope="col">Qtd.</th>
				      		<th scope="col">Preço</th>
				      		<th scope="col">Apagar</th>
				    	</tr>
				  	</thead>
				  	<?php
						Produto::showProdutos($conn);				
					?>
				</table>
			</div>			
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>