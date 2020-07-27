h<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Contador personalizavel</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			
		<div>
			<form method="get" action="Exercicio03-desafio.php">
				<?php
					$inputs = 1;
					while($inputs <= 3){
						echo "valor $inputs <input type='number' name='v$inputs' min='1' value> <br><br>";
						$inputs;
				}
				?>	
				<input type="submit" value="Enviar" class="botao">
			</form>

			<?php
				$valor1 = ($_GET["v1"])? $_GET["v1"] : "NAO INFORMADO";
				$valor2 = ($_GET["v2"])? $_GET["v2"] : "NAO INFORMADO";
				$valor3 = ($_GET["v3"])? $_GET["v3"] : "NAO INFORMADO";

				if($valor1 < $valor2){
					$op =1;
				}elseif ($valor1 > $valor2) {
					$op = 2;
				}elseif ($valor1 == $valor2) {
					$op =3;
				}

				
				switch ($op) {
					case '1':
						while($valor1 <= $valor2){
							echo $valor1."<br>";
							$valor1 += $valor3;
						}
						break;
					case '2':
						while($valor1 >= $valor2){
							echo $valor1."<br>";
							$valor1 -= $valor3;
						}	
						break;
					case '3':
						echo "nao e possivel efetuar a contagem, os valores sao iguais";
						break;
					
						
				}
				
			?>
				<a href="Exercicio03-desafio.html" class="button">voltar</a>
		

		</div>
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
