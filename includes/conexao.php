<?php
// Variáveis de conexão
$servidor = 'ftp://45.152.44.175';
$banco = 'u451416913_g15';
$usuario = 'u451416913_g15';
$senha = 'Gp15@123';

// Criando a conexão. PDO funciona com qualquer SGBD
try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro na conexão: ' . $e->getMessage());
}
?>