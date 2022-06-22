<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		
			<h1 id="titulo">Primeiro Form</h1>

	<div id="formulario">
		<form action="/action_page.php">
			<label for="p_nome">Primeiro Nome</label>
			<input type="text" id="p_nome" name="p_nome" placeholder="Ex.: Andrey"> <br>
			<label for="s_nome">Sobrenome</label>
			<input type="text" id="s_nome" name="s_nome" placeholder="Ex.: Ferreira"> <br>
			<button type="submit">Enviar Dados</button>
		</form>
	</div>
   	<div>
		<?php
			
		

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
   		font-size: 20px;
   		font-family: cursive;
   		color: darkblue;
   		background-color: lightblue;
   		border-radius: 12px;
   		padding: 6px;
   		width: 800px;
   		margin: auto;
   	}

   	button{
   		border-radius: 12px;
   		background-color: aliceblue;
   		border: 2px solid blue;
   	}

   </style>
	</body>
	</html>	

