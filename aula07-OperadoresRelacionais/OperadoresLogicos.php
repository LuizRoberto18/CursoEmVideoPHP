<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Operadores Logicos em PHP</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
<!--
	 o operador E em PHP    o operador OU em PHP   o operador XOU em PHP     o operador NAO em PHP
	 é representado pela    é representado pela   é representado pela        é representado pela
	 clausula (and/&&) 	     clausula (or/||)	    clausula (xor) 			   clausula (!)
		p  q  p E q  		  p  q  p OU q 		   p  q  p XOU q 			     p   Nao p 	
		V  V    V 			  V  V    V  		   V  V    F					 V    F	
		V  F    F 			  V  F    V  		   V  F    V	                 F    V
		F  V    F 			  F  V    V  		   F  V    V	
		F  F    F			  F  F    F   		   F  F    F	
-->
		<div>

			<?php
				$anoNasc = $_GET["nsc"];
				$idade = 2019 - $anoNasc;
				echo "quem nasceu em $anoNasc tem idade de $idade anos<br/>";

				$voto = ($idade >= 18 && $idade<= 65)? "OBRIGATORIO" : "NAO E OBRIGATORIO";
				echo "o seu voto é $voto";
			?>	
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>