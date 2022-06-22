<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Switch ao invés de IF</title>
</head>
<body>
    <?php
    $fruta = "Limão";
    switch($fruta){
        case "maçã":
            echo "a fruta é uma maçã";
            break;
        case "abacate":
            echo "a fruta é um abacate";
            break;
        case "Limão":
            echo "A fruta é um limão";
            break;        
    }
    ?>
</body>
</html>