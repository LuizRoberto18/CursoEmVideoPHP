<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Funções Aritimeticas com PHP</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			<!-- Funcoes Matematicas
				abs() valor Absoluto
				pow() potenciação
				sqrt() raiz quadrada
				round() Arredondamento // ceil(Arredonda sempre para cima independente se for 3.1 será 4)
									  // floor(Arredonda sempre para baixo independente se for 3.9 será 3)
				intval() valor inteiro da varialvel 
				number_format() Formatação
			-->
		<div>

				<?php
					$v1 = $_GET["x"];
					$v2 = $_GET['y'];
					

					echo "<H2>valores recebidos $v1 e $v2</H2>";
					echo " o valor absoluto de $v2 e ". abs($v2);
					echo "<br> valor de $v1<sup>$v2</sup> e ". pow($v1, $v2);
					echo "<br> valor da raiz quadrada de $v1 e ". sqrt($v1);
					echo "<br> valor de $v2 arredondado e ". round($v2);
					echo "<br> a parte inteira de $v2 e ". intval($v2);
					echo "<br> o valor de moeda de $v2 e R$". number_format($v2,2,",", ".");
				?>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>