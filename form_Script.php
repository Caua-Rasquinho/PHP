<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">DESAFIO CONTINUE</h1>

	<div id="formulario">
		<form>
			<p>E-mail</p>
			<input type="text" name="email" placeholder="Digite seu email">
		</form>
	</div>
   	<div>
		<?php
		for($num=0;$num<=50;$num++){
			if($num%2==0){
				continue;
				}
				echo "$num <br>";		
		}

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

