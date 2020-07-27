<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Exercicio com Switch Desafio e integracao de html e php</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			
		<div>
			<?php
				$estado = ($_GET["est"])? $_GET["est"] : 0;
				
				
				switch ($estado) {
					case 1;
					case 2;
					case 3:
					case 4:
					case 5:
					case 6:
					case 7;
						echo "voce mora na <span class='foco'>Regiao Norte</span>";
						break;
					case 8:
					case 9:
					case 11;
					case 12;
					case 13;
					case 14;
					case 15;
					case 16;
						echo "voce mora na <span class='foco'>Regiao Nordeste</span>";
						break;
					case 17;
					case 18;
					case 19;
						echo "voce mora na <span class='foco'>Regiao Centro-Oeste</span>";
						break;
					case 20;
					case 21;
					case 22;
					case 23;
						echo "voce mora na <span class='foco'>Regiao Sudeste</span>";
						break;
					case 24;
					case 25;
					case 26;
						echo "voce mora na <span class='foco'>Regiao Sul</span>";
						break;
					default:
						echo "voce mora numha Regiao que nao existe";
				}

				
			?>
			<a href="javascript:history.go(-1)">voltar</a>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
