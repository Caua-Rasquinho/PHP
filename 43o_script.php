<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando IF</title>
</head>
<body>
    <?php
    $num = 1;
    if($num == 0){
        echo "O valor de Num é igual a 0";
    } elseif($num == 1){
        echo "O valor de num é 1";
    }elseif($num == 2){
        echo "O valor do Num é 2";
    }
    ?>
</body>
</html>