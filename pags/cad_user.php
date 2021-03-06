<?php
include '../class/conection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Usuário</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="It2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">

		
		
		<div class="row">
			
			<div class="col-xl-12 text-center" style="margin-top: 50px">
				<h1><strong>Cadastro de Usuário</strong></h1>
			</div>
			
		</div>
		
		<div class="row" style="margin-top: 100px">
			<div class="col-xl-4"><br></div>
			<div class="col-xl-4" style="background-color: rgb(220, 220, 220); padding:40px; border-radius: 20px;">
				<form method="POST" id="cad_user">
				  	<div class="form-group">
				    	<label for="login">Login:</label>
				    	<input type="text" class="form-control" name="login" id="login">
				  	</div>
				  	<div class="form-group">
				    	<label for="email">E-mail:</label>
				    	<input type="text" class="form-control" name="email" id="email">
				  	</div>
				  	<div class="form-group">
				    	<label for="senha">Senha:</label>
				    	<input type="password" class="form-control" name="senha" id="senha">
				  	</div>
				  	<div class="form-group">
				    	<label for="conf-senha">Confirmar Senha:</label>
				    	<input type="password" class="form-control" name="conf-senha" id="conf-senha">
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>			
		</div>
	</div>
	
	<div id="result">
				
	</div>
	
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$("#cad_user").submit(function () {
			//console.log('clicked');
			$.ajax({
			  	type: 'POST',
			  	url: 'action/cad_usuario.php',
			  	data: $("#cad_user").serialize(),
			  	success: function(response) {
        			//$("#result").html(response);
        			console.log('sucesso');
    			}
			});
		});
	</script>
</body>
</html>