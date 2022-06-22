<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">Operador Aritmético #4</h1>
   	<div>
		<?php
		$a=60;
		$b=90;
		$c=150;
		$r;
			echo "Variável A = $a<br>";
			echo "Variável B = $b<br>";
			echo "Variável C = $c<br><br>";

			$r=($a+$b)-$c;

			echo "O resultado da soma da variável A + B e, deste resultado, subtrair a variável C é: $r"

		?>
   	</div>

   	<style>
   	#titulo{
   		text-align: center;
   		font-family: Verdana;
   		font-size: 40px;
   		color: darkblue;
   	}
   		body{
   		background:lightskyblue ;
   	}

   	div{
   		text-align: center;
   		font-size: 28px;
   		font-family: cursive;
   		color: darkblue;
   		background-color: lightblue;
   		border-radius: 12px;
   		padding: 6px;
   	}

   </style>
	</body>
	</html>	

