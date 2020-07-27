<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Operadores Relacionais PHP</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			<!--
				Operadores Relacionais
				quase todos sinboloes são iguais a java 
				igual $a == $a // testa se o valor da variavel é igual a outra, se o conteudo de $a for um numero 3 e o conteudo da $b for uma String "3" o operador de igual do PHP vai dizer q elas sao iguais. 

				identico $a === $b // se quiser saber se sao do msm tipo e iguais tem q colocar um sinalde igual no meio do perador "igual" ficando tres sinbolos de igual.
				
				Operador Ternario => ?    :

				ele faz conparacoes simples e mostram resultado de acordo com resoltado da expressao 

				expressao ? verdadeiro : falso
				 $a > $b  ?     $a 	   :  $b

				 $maior = $a>$b ? $a : $b;
				  $a for maior q $b, $maior recebe o conteudo de $a se não recebe o de $b
			-->
		<div>

			<?php
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				$tipo = $_GET["op"];			
				
				echo "Os valores passados foram $n1 e $n2 <br/>";
				$r 	= ($tipo == "S") ? $n1+$n2 : $n1*$n2;
				echo "O resoltado será $r";
			?>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>