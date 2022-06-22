<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">Operador Aritmético #5</h1>
   	<div>
		<?php
		$a=20;
		$b=6;
		//$r;
			echo "Variável A = $a<br>";
			echo "Variável B = $b<br>";
			//echo "Variável C = $c<br><br>";

			$r=$a/$b;
			$rr=$a%$b; //resto da divisao

			echo "O resultado da divisão da variável A pela variável B, resultará em 3, e com o resto sendo: $rr";

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

