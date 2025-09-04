<?php
session_start();

// Código fixo para demonstração
$CODIGO_FIXO = "123456";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo_digitado = $_POST['codigo'];
    
    if ($codigo_digitado === $CODIGO_FIXO) {
        // Código válido - redireciona para o painel do responsável
        header('Location: painel_responsavel.php');
        exit();
    } else {
        // Código inválido
        $_SESSION['erro_validacao'] = "Código inválido. Use 123456 para demonstração.";
        header('Location: codigo_verificacao.php');
        exit();
    }
} else {
    header('Location: codigo_verificacao.php');
    exit();
}
?>