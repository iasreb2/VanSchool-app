<?php
session_start();
include 'includes/conexao.php';

$codigo = $_POST['codigo'];
$id = $_SESSION['usuario'];

$sql = $pdo->prepare("SELECT codigo_verificacao FROM usuarios WHERE id = ?");
$sql->execute([$id]);
$usuario = $sql->fetch();

if ($usuario && $usuario['codigo_verificacao'] == $codigo) {
    header("Location: dashboard.php");
} else {
    echo "Código inválido.";
}
?>