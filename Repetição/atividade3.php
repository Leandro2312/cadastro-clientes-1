<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição</title>
</head>
<body>
    <h1> Tábuada do 8 </h1>
    <?php
    $i = -1;
        while($i <= 9){
            $i++;
            $tabuada = $i * 8;
            echo "$tabuada <br>";
            
        }
    ?>
</body>
</html>