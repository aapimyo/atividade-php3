<?php 
$num1 = (int) readline("Primeiro número: ");
$num2 = (int) readline("Segundo número: ");

if ($num1 > $num2) {
    echo "O primeiro número é maior.\n";
} elseif ($num1 < $num2) {
    echo "O segundo número é maior.\n";
} else {
    echo "Os dois número são iguais.\n";
}
?>