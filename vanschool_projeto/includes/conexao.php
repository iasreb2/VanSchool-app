<?php
// Variáveis de conexão
$servidor = 'localhost';
$banco = 'biblioteca_iasminr';
$usuario = 'root';
$senha = '';

// Criando a conexão. PDO funciona com qualquer SGBD
try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão: ' . $e->getMessage());
}
?>