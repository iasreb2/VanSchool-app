<?php
$host = 'localhost';
$db = 'u451416913_g15';
$user = 'u451416913_g15';
$pass = 'Gp15@123';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>