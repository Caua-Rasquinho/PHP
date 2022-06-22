<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">IF ELSEIF ELSE</h1>
   	<div>
		<?php
		$nota1 = 6;
		$nota2 = 9;
		$nota3 = 7.5;
		$media = ($nota1+$nota2+$nota3)/3;
		 if ($media>=9) {
		 	$conceito="A";
		 }
		 elseif($media>7.5){
		 	$conceito="B";
		 }
		 elseif($media>=5){
		 	$conceito="C";
		 }
		 else
		 	$conceito="D";
		 echo "Média: ".$media."- Conceito: ".$conceito;
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

