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
		 * XOR
		 */
		var_dump(7==7 XOR 9>7); //FALSE, ambas as expressões são verdardeiras
		var_dump(7==7 XOR 9<7); //TRUE, a primeira expressão é verdadeira
		var_dump(7<7 or 9>7); //TRUE, a segunda expressão é verdadeira

		//!
		
		
		var_dump(!9<7); //TRUE 9 NÃO é menor que 7
		var_dump(!9>7); //FALSE, 9 é maior que 7 


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
   		width: 800px;
   		margin: auto;
   	}

   </style>
	</body>
	</html>	

