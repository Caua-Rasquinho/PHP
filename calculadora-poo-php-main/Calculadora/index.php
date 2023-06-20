<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>CALCULADORA MÁGICA</title>
</head>
<body>
    <div class="cabecalho">
        <h1>CALC MÁGICA</h1>
        <h1>CAUÃ RASQUINHO<br>ANDREY PICHUTI<br>JOÃO GABRIEL</h1>
    </div>
    <div class = "grid">
    <div class="formulario">
        <form action="./php/calculadora.php" method="get" id="form1">
            <div class="formulario">
                <label for="num1">NUMBER 1</label>
                <input type="text" name="num1" id="num1" value="0">
                <label for="num2">NUMBER 2</label>
                <input type="text" name="num2" id="num2" value="0">
            </div>
            <div class="botao">
                <input type="submit" value="+" name="somar" id="ad">
                <input type="submit" value="-" name="subtrair" id="sub">
                <input type="submit" value="×" name="multiplicar" id="multi">
                <input type="submit" value="/" name="dividir" id="div">
                <input type="submit" value="×^" name="elevar" id="exp">
                <input type="submit" value="√" name="acharRaiz" id="raz">
            </div>
        </form>
    </div>
</div>
</body>
</html>