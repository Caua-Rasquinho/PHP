<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>CALCULADORA MÁGIA 2</title>
</head>
<body>
    <div class="cabecalho">
        <h1>CALC MÁGICA</h1>
        <h1>CAUÃ RASQUINHO<br>ANDREY PICHUTI<br>JOÃO GABRIEL</h1>
    </div>
    <div class="resultado">
        <?php
            require_once "./Calc.php";
            error_reporting(E_ERROR | E_PARSE);
            $calculadora = new Calc($_GET['num1'],$_GET['num2']);
            $soma = $_GET['somar'];
            $sub = $_GET['subtrair'];
            $mult = $_GET['multiplicar'];
            $div = $_GET['dividir'];
            $exp = $_GET['elevar'];
            $raiz = $_GET['acharRaiz'];

            print("<div class = 'result'>Aqui está o resultado de A meu patrão = <b>{$calculadora->getA()}</b><br></div>");
            print("<div class = 'result'>Aqui está o resultado de B meu patrão = <b>{$calculadora->getB()}</b><br></div>");
            if (isset($soma)){
                $calculadora->somar($calculadora->getA(), $calculadora->getB());
            } else if(isset($sub)){
                $calculadora->subtrair($calculadora->getA(), $calculadora->getB());
            } else if(isset($mult)){
                $calculadora->multiplicar($calculadora->getA(), $calculadora->getB());
            }else if(isset($div)){
                $calculadora->dividir($calculadora->getA(), $calculadora->getB());
            }else if(isset($exp)){
                $calculadora->exponenciar($calculadora->getA(), $calculadora->getB());
            }else if(isset($raiz)){
                $calculadora->acharRaiz($calculadora->getA(), $calculadora->getB());
        }


        ?>
        </div>
            <div class="voltar">
                <form action = "../index.php" id="form2">
                <div class = "btnvoltar">
                    <input type="submit" value="Voltar" id="btnVoltar">
                </div>
                </form>
            </div>
    </div>
</body>
</html>