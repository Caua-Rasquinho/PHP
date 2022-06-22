<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">Operadores de Comparação</h1>
   	<div>
		<?php
		/**
		 * AND
		 */
		var_dump(7==7 AND 9>7); //TRUE, ambas exp. verdadeiras
		var_dump(7==7 AND 9<7); //FALSE, apenas a primeira expressão é verdadeira

		/*
		OR
		*/
		
		var_dump(7==7 or 9>7); //TRUE, ambas as expressões são verdadeiras
		var_dump(7!=7 or 9>7); //TRUE, a segunda expressão é verdadeira
		var_dump(7!=7 or 9<7); //FALSE, ambas as expressões são falsas 


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
   		background:lightskyblue;
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

