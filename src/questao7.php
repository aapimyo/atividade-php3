<?php
$matricula1 = (string) readline("Primeira matrícula: ");
$matricula2 = (string) readline("Segundo matrícula: ");

if (strcmp($matricula1, $matricula2) < 0) {
    echo "Comparando como texto (strcmp): $matricula1 vem primeiro\n";
} elseif (strcmp($matricula1, $matricula2) > 0) {
    echo "Comparando como texto (strcmp): $matricula2 vem primeiro\n";
} else {
    echo "os valores são iguais.\n";
}

if ($matricula1 < $matricula2) {
    echo "Comparando com o operador <: $matricula1 vem primeiro\n";
} elseif ($matricula1 > $matricula2) {
    echo "Comparando com o operador <: $matricula2 vem primeiro\n";
} else {
    echo "Os valores são iguais.\n";
}

/*
strcmp() compara as strings como texto. 
O operador < pode fazer comparação númerica quando os textos são númericos.
Por isso, 10 e 9 podem apresentar resultados diferentes.
*/
?>