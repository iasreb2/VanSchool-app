CREATE DATABASE IF NOT EXISTS vanschool;
USE vanschool;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('motorista', 'responsavel') NOT NULL,
    codigo_verificacao VARCHAR(6)
);