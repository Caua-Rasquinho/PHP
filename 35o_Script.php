<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">Incremento e Decremento</h1>
   	<div>
		<?php
		$n1=2;
		$n2=4;
		$n3=6;

		$resp1 = ++$n2-$n1;
		$resp2 = $n3-- + $n1;
		$resp3 = --$n1 + $n3;

		echo "num1 = $n1<br> num2 = $n2<br> num3 = $n3<br><br>";
		echo "resposta 1 = $resp1 <br> resposta 2 = $resp2 <br> resposta 3 = $resp3 <br>";
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

