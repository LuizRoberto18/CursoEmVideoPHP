<!doctype html>
<html lang="pt-br">
	<head>
 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" type="text/css" href="../_css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<title>Variaveis em PHP</title>
		<style type="text/css">
		 
		</style>
	</head>
	<body>

		<div>
				<?php
					/*todas variaveis em php sempre comecam com um sifrão no comeco isso é uma regra pdrão, todos os nomes de variaveis sarão escritos em menusculos isso pq o php faz diferenciação entre letras menusculas e maiusculas mas isso não é um problema ja q em outras linguagens esse tambem é o padrão e o php aceita o padrão CamelCase e underline */
					/*declaração de variavel por exemplo em JS é var int, já em php NÃO EXISTE declaração de variaveis isso pq no php tipo de dados é abstrato o php faz a atribuição através da coerção php é dinamico existe os tipos mas vc n tem obriigacao de declara-los basta colocar um valor int ou string ou bool ele modifica de acordo com a sua atribuição */
						$idade = 20;
						/*no php vc pode deixar ele definir atraves da atribuicao ou forcar uma tipagem com TYPECAST forçando uma variavel a ter um tipo usando um typecast de um determinado tipo existe typecast para os tipos int,interger,float,real,double,string mas NAÃO EXISTE PARA O TIPO LOGICO isso pq o tipo logico em php são considerados como numeros inteiros no caso de true é considerado valor 1 e false vazia */
						/*para considerar um typecast por exemplo string basta colocar $n = (string) "oi"; */
						$meuNome = "eu";

						/*por causa da coercao se colocar a msm variavel agr com outro tipo o php automaticamente muda o valor de int para float*/
						$idade = 20.5;

						
						/*origem da palavra echo vem de eco vc manda o php falar algo e ele ti responde como um eco*/
						/*echo é equivalente ao comando print e printf, dentro do echo vc pode colocar qualque palavra com qualquer tag html como ex: echo "ola <br> mundo" */
						/*para realizar concatenacao por exemplo em JAVA ficaria printf(meuNome+" tenho " + idade);
						no caso do php o "+" será substituido por um "." ficando echo "$meuNome." tenho ".$idade." anos;"*/
						/*como toda variavel em php comeca com sifrao podemos reescrever o codigo da seguinte maneira, basicamente  estou ignorando que existe a concatenização colando as variaveis independente disso dentro do echo
						*/

						echo "$meuNome tenho $idade anos";

						/*
						obs: AS ASPAS TEM Q SER DUPLAS se vc coloar aspas simples o php nao vai fazer essa interpretacao de variaveis ele vai escrever da mesma maneiras mas o resoltado final será exatamente $meuNome tenho $idade anos
						a variavel $idade foi definida com todas as letras em menusculas se por exemplo colocar $Idade com I maiusculo automaticamente ele vai mostrar: Notice: Undefined variable: Idade in C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\CursoPHP\aula04\tipos.php on line 38, dizendo q a variavel idade com I que foi referenciada na linda 38 esta indefinida ou seja ela não existe isso pq existe essa diferenciacao entre as letras maius. e menus. entáo padrão deixar menus.
						*/

				?>
		</div>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>