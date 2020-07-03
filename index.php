<?php
include 'class/conection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Teste</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="It2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			
			<div class="col-xl-12 text-center" style="margin-top: 50px">
				<h1><strong>PROJETO TESTE</strong></h1>
			</div>
			
		</div>
		
		<div class="row" style="margin-top: 100px">
			<div class="col-xl-4"><br></div>
			<div class="col-xl-4" style="background-color: rgb(220, 220, 220); padding:40px; border-radius: 20px;">
				<form method="POST" action="action/login.php">
				  	<div class="form-group">
				    	<label for="login">Login:</label>
				    	<input type="text" class="form-control" name="login" id="login">
				  	</div>
				  	<div class="form-group">
				    	<label for="senha">Senha:</label>
				    	<input type="password" class="form-control" name="senha" id="senha">
				  	</div>
				  	<a href="pags/cad_user.php">Cadastrar</a>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>			
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>