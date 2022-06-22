<!DOCTYPE html>
<html>
 <head>
	<link rel="stylesheet" href="style2.css">
 </head>
	<body>	
		<div>
			<h1 id="titulo">FUNCIONARIOS</h1>
		<table border=separate align="center">
	<?php

	$funcionario = array(
		array(1, "João Paulo", "RH", 12000),
		
		array(2, "Ana Beatriz", "TI", 18000),

		array(3, "Pedro Paulo", "PCP", 10000),

		array(4, "Maria Rosa", "RH", 8000),

		array(5, "Carlos Silva", "COMPRAS", 16000),

		array(6, "Rosana Alves", "DIRETORIA", 22000),

		array(7, "João Mattos", "FINANCEIRO", 18000)

);


echo "<thead><td>Nome</td> <td>Função</td> <td>Salário</td> </thead>";
foreach ($funcionario as $chave => $valor) {
echo "<tr><td> {$valor[1]}</td>  <td>{$valor[2]}</td> <td>{$valor[3]}</td> </b></td></tr>";

	


}

	 ?>
</table>
    </div>
   <style>
   	body{
   		background:lightskyblue ;
   	}

   	#titulo{
   		text-align: center;
   		font-family: Verdana;
   		font-size: 40px;
   		color: darkcyan;
   	}

   </style>
	</body>
	</html>	

