<?php
session_start();
include 'include/conexao.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar se é motorista
    $sql_motorista = $pdo->prepare("SELECT * FROM motoristas WHERE email = ?");
    $sql_motorista->execute([$email]);
    $motorista = $sql_motorista->fetch();

    // Verificar se é responsável
    $sql_responsavel = $pdo->prepare("SELECT * FROM responsaveis WHERE email = ?");
    $sql_responsavel->execute([$email]);
    $responsavel = $sql_responsavel->fetch();

    if ($motorista && $senha === $motorista['senha']) {
        $_SESSION['usuario'] = $motorista['id'];
        $_SESSION['tipo'] = 'motorista';
        $_SESSION['nome'] = $motorista['nome'];
        header("Location: painel_motorista.php");
        exit;
    } elseif ($responsavel && $senha === $responsavel['senha']) {
        $_SESSION['usuario'] = $responsavel['id'];
        $_SESSION['tipo'] = 'responsavel';
        $_SESSION['nome'] = $responsavel['nome'];
        header("Location: codigo_verificacao.php");
        exit;
    } else {
        $_SESSION['erro_login'] = "Email ou senha incorretos.";
        header("Location: login_form.php");
        exit;
    }
} else {
    $_SESSION['erro_login'] = "Por favor, preencha todos os campos.";
    header("Location: login_form.php");
    exit;
}
?>