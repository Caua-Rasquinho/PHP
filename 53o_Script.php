<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">Estrutura FOR</h1>
   	<div>
		<?php

			$pararLoop=9;
			for($numero=0;;$numero++){
				if($numero == $pararLoop){
					break;
				}
				echo $numero."<br>";
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

