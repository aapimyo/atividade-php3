<?php
$idade = (int) readline("Sua idade: ");
$ingresso = (string) readline("Possui ingresso? (s/n): ");

$acessoLiberado = ($idade >= 18 && $ingresso == "s");

if ($acessoLiberado) {
    echo "Entrada liberada.\n";
} else {
    echo "Acesso negado.\n";
}
?>