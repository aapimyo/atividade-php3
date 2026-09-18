<?php
$entrada = readline("Valor: ");

$resultadoSolto = ($entrada == 10);
$resultadoEstrito = ($entrada === 10);

echo '$entrada == 10 -> ' . ($resultadoSolto ? "true" : "false") . "\n";
echo '$entrada === 10 -> ' . ($resultadoEstrito ? "true" : "false") . "\n";

echo "Tipo de variável: " . gettype($entrada) . "\n";

/* 
readline() retorna o valor como string.
Por isso == permite a comparação entre valores de tipos diferentes, enquanto === exige que o valor e o tipo sejam iguais.
*/
?>