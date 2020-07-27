<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Operações Aritimeticas com PHP</title>
		<style type="text/css">
		 
		</style>
	</head>
	<body>
		<!-- os operadores aritimeticos são os mesmos do Java +, *, -, /, % -->
		<div>

				<?php
					
					$n1 = $_GET["a"];
					$n2 = $_GET['b'];
					$m = ($n1 + $n2) / 2; 

					echo "<H2>valores recebidos em a:$n1 e b:$n2</H2>";
					echo "a soma  é ".($n1 + $n2);
					echo "<br>a subtração é ".($n1 - $n2);
					echo "<br>a multiplicação é ".($n1 * $n2);
					echo "<br>a divisão é ".($n1 / $n2);
					echo "<br>a porcentagem é ".($n1 % $n2);
					echo "<br>a media é $m";

				?>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>