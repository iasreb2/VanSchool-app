<?php
include 'includes/conexao.php';

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$codigo = rand(1000, 9999);

$sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha, tipo, codigo_verificacao) 
VALUES (?, ?, ?, ?, 'responsavel', ?)");
$sql->execute([$nome, $telefone, $email, $senha, $codigo]);

header("Location: login.php");
?>