<?php
$valor = (float) readline("Valor do pedido: ");
$cartao = (string) readline("Cliente possui cartão? (s/n): ");
$pix = (string) readline("Cliente possui Pix? (s/n): ");

$pagamentoAceito = ($cartao == "s" || $pix == "s");

if ($pagamentoAceito) {
    echo "Valor do pedido: R$ " . $valor . "\n";
    echo "Pedido aprovado.\n";
} else {
    echo "Pedido recusado: nenhuma forma de pagamento disponível.\n";
}
?>