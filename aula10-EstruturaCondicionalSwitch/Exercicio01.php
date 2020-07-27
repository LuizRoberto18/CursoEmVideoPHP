<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Exercicio com Switch e integracao de html e php</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			
		<div>
			<?php
				$n = ($_GET["num"])? $_GET["num"] : 0;
				$o = ($_GET["oper"])? $_GET["oper"] : 1;
				
				switch ($o) {
					case 1:
						$r = $n * 2;
						break;
					case 2:
						$r = $n ^ 3;
						break;
					case 3:
						$r = sqrt($n); //$r = $n ^ (1/2) ou 0.5;
				}

				echo "o resultado da operacao solicitada foi <span class= 'foco'> $r </span>";
			?>
			<a href="Exercicio01.html">voltar</a>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>