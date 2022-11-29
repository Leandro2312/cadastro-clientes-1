<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>

<body>
    <h1>Cadastro de clientes</h1>
    <?php
    $nome = "Rafa";
    $idade = 20;
    $fumante = true;
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante<br></p>";
    /*
    ____________________________________________________
    (OPERADORES ARITIMÉTICOS)
    + ADIÇÃO
    – SUBTRAÇÃO
    * MULTIPLICAÇÃO
    / DIVISÃO
    % MÓDULO
    -----------------------------------------------
    (OPERADORES RELACIONAIS)
    ==  Igual a
    >   Maior que
    <   Menor que
    >=  Maior ou igual a
    <=  Menor ou igual a
    !=  Diferente
    -----------------------------------------------
    (OPERADORES LÓGICOS)
    &&  AND
    ||  OR
    !   NOT : inverte o resultado false ou true
    ____________________________________________________
    */

    //if usando operador ternario
    $hora = 20;
    echo ($hora>=10) ? "certo" : "errado";
    echo "<br>";
    $dia = 2;
    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda";
            break;
        case 3:
            echo "Terça";
            break;
        case 4:
            echo "Quarta";
            break;
        case 5:
            echo "Quinta";
            break;
        case 6:
            echo "Sexta";
            break;
        case 7:
            echo "Sábado";
            break;
        default:
            echo "Dia inválido";
            break;
    }
    echo "<br>";
    //---------------------------------------------------
    // Estrutura de repetiçaõ
    

    // while

    $contador = 1;
    while($contador < 10){
       echo "contador while, loop número $contador <br>";
        $contador++;
    }

    echo "<br>";


    //array

    $clientes = ["guto","cleiton","joao","milena","giovani","guilherme","Ana"];
    $contador=0;
    while($contador <= 6){
        echo "$clientes[$contador]<br>";
        $contador++;
    }


    ?>
</body>

</html>