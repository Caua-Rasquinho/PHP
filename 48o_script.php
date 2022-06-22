<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando a estrutura WHIle de outra maneira</title>
</head>
<body>
    <?php
    $n = 1;
    while($n <= 10):
        echo $n;
        echo $n++;
    endwhile;
    
    ?>
</body>
</html>