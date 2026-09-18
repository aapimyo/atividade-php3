<?php
$nome = (string) readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$renda = (float) readline("Renda mensal: ");
$tempoEmprego = (int) readline("Tempo de empregado (meses): ");
$negativado = (string) readline("Está negativado (s/n): ");

$idadePermitida = ($idade >= 18 && $idade <= 65);
$rendaOuEstabilidade = ($renda >= 2000 || $tempoEmprego >= 24);
$estaNegativado = ($negativado == "s");

echo "Idade permitida: ". ($idadePermitida ? "atendida" : "não atendida"). "\n";
echo "Renda ou Estabilidade: " . ($rendaOuEstabilidade ? "atendida" : "não atendida") . "\n";
echo "Nome limpo: " . (!$estaNegativado ? "atendida" : "não atendida") . "\n";

$creditoAprovado = ($idadePermitida && $rendaOuEstabilidade && !$estaNegativado);

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para $nome.\n";
} else {
    echo "Resultado: Crédito não aprovado para $nome.\n";
}

?>