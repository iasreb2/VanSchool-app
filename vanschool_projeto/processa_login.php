<?php
session_start();
include 'includes/conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
$sql->execute([$email]);
$usuario = $sql->fetch();

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario'] = $usuario['id'];
    $_SESSION['tipo'] = $usuario['tipo'];
    header("Location: codigo_verificacao.php");
} else {
    echo "Login inválido.";
}
?>