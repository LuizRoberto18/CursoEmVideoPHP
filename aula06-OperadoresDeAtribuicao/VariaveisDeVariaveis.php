<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Variaveis De Variaveis ou Variaveis de Variantes PHP</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			<!--
				Variaveis De Variaveis
				$site = "cursoEmVideo";
				$$site ="cursoPHP"; //o sifrao antes do sifrao faz com q seja criado uma nova varial com o seu nome dado com base no conteudo da vaeiavel $site
				echo $site;
				echo $cursoEmVideo;
				$site(cursoEmVideo) $cursoEmVideo(cursoPHP)
				a variavel $cursoEmVideo foi criada usando o conceito de variaveis de Variaveis
			-->
		<div>

			<?php
				$x = "abc";
				$$x = "def";

				echo "O conteudo da variavel X e $x";
				echo "<br>A variavel ABC criada recebeu o valor $abc";					
				
			?>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>