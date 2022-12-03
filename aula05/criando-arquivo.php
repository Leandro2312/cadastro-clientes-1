<?php

$arquivo = fopen("clientes.txt","w");

$listaClientes = [
    [
        "nome" => "Leandro",
        "idade" => 18
    ],  
    [
        "nome" => "Yuji",
        "idade" => 32
    ]   
];

print_r($listaClientes[0]["nome"]);
print_r($listaClientes[0]["idade"]);
echo "<br>";

for($i=0; $i<count($listaClientes); $i++){
fwrite($arquivo, $listaClientes[$i]["nome"] . "\t");
fwrite($arquivo, $listaClientes[$i]["idade"] . "\n");
    
}


fclose($arquivo);
?>