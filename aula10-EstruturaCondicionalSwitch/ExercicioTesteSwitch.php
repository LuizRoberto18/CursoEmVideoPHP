<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Testando Switch com For</title>
		<style type="text/css">
		 	
		</style>
	</head>
	<body>
			
		<div>
			<?php
				

				function tabuada(){
								$x = ($_GET["x"])? $_GET["x"]:1;
									
								$op = ($_GET["tab"])? $_GET["tab"]:1;
							switch ($op) {
						case 1;
							echo "Tabuada de Adição <br>";

							for ($i=1; $i <= 10; $i++) { 
								$r = $x + $i;
								echo "$x + $i = $r <br>";
							}
							break;
						case 2:
							echo "Tabuada de subtração <br>";

								for ($i=1; $i <= 10; $i++) { 
									$r = $x - $i;
									echo "$x - $i = $r <br>";
								}
							break;
						case 3:
							echo "Tabuada de multiplicação <br>";

								for ($i=1; $i <= 10; $i++) { 
									$r =  $x * $i;
									echo "$x * $i = $r <br>";
								}
								break;
						case 4:
							echo "Tabuada de divisao <br>";

								for ($i=1; $i <= 10; $i++) { 
									$r =  $x / $i;
									echo "$x / $i =".number_format($r, 2). "<br>";
								}
							break;
						default:
							echo "isso não é um operador matematico animal<br>";
					
					}
						
				}
				$tab = tabuada();
				echo  "$tab";
			?>
			<a href="javascript:history.go(-1)">voltar</a>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>
