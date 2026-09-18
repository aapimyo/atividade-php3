<?php
$user = (string) readline("Usuário: ");
$senha = (string) readline("Senha: ");

$credenciaisValidas = (strcasecmp($user, "admin") == 0 && $senha === "php2026");

if (!$credenciaisValidas) {
    echo "Usuário ou senha inválidos.\n";
} else {
    echo "Bem-vindo, admin!\n";
}
?>