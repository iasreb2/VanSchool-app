-- Tabela de Responsáveis
CREATE TABLE responsaveis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    telefone VARCHAR(20),
    senha VARCHAR(255),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP --preenche automaticamente
);

-
-- Tabela de Alunos
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    data_nascimento DATE,
    escola VARCHAR(100),
    ponto_embarque VARCHAR(255),
    ponto_desembarque VARCHAR(255),
    responsavel_id INT,
    FOREIGN KEY (responsavel_id) REFERENCES responsaveis(id)
);

ALTER TABLE alunos RENAME COLUMN nome TO nome_aluno;

ALTER TABLE alunos RENAME COLUMN ponto_embarque TO endereco_embarque;

ALTER TABLE alunos RENAME COLUMN ponto_desembarque TO endereco_desembarque;

ALTER TABLE alunos
DROP COLUMN escola

ALTER TABLE alunos 
ADD COLUMN observacoes VARCHAR(550)

ALTER TABLE alunos 
ADD COLUMN telefone_emergencia VARCHAR(30) AFTER endereco_desembarque ;
-- Tabela de Motoristas
CREATE TABLE motoristas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    telefone VARCHAR(20),
    cnh VARCHAR(20),
    senha VARCHAR(255),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Vans
CREATE TABLE vans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    motorista_id INT,
    modelo VARCHAR(50),
    placa VARCHAR(20) UNIQUE,
    capacidade INT,
    codigo_van VARCHAR(10) UNIQUE,
    FOREIGN KEY (motorista_id) REFERENCES motoristas(id)
);

-- Tabela de Serviços Contratados (inclui VanUber e fixos)
CREATE TABLE servicos_contratados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    aluno_id INT,
    motorista_id INT,
    van_id INT,
    tipo_servico ENUM('fixo', 'uber') DEFAULT 'fixo',
    status ENUM('pendente', 'ativo', 'cancelado', 'concluido') DEFAULT 'pendente',
    data_inicio DATE,
    data_fim DATE,
    horario_embarque TIME,
    horario_desembarque TIME,
    FOREIGN KEY (aluno_id) REFERENCES alunos(id),
    FOREIGN KEY (motorista_id) REFERENCES motoristas(id),
    FOREIGN KEY (van_id) REFERENCES vans(id)
);

-- Tabela de Solicitações VanUber (ligada aos serviços contratados)
CREATE TABLE vanuber_solicitacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    servico_id INT,
    data_solicitacao DATETIME DEFAULT CURRENT_TIMESTAMP,
    ponto_partida VARCHAR(255),
    ponto_chegada VARCHAR(255),
    preco DECIMAL(10,2),
    status ENUM('aguardando', 'aceito', 'recusado', 'concluido') DEFAULT 'aguardando',
    FOREIGN KEY (servico_id) REFERENCES servicos_contratados(id)
);

-- Tabela de Notificações
CREATE TABLE notificacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_tipo ENUM('responsavel', 'motorista'),
    usuario_id INT,
    titulo VARCHAR(100),
    mensagem TEXT,
    tipo ENUM('pagamento', 'comunicado', 'sistema'),
    data_envio DATETIME DEFAULT CURRENT_TIMESTAMP,
    visualizado BOOLEAN DEFAULT FALSE
);


CREATE TABLE codigos_verificacao (
    id INT AUTO_INCREMENT PRIMARY KEY,
    codigo VARCHAR(6) NOT NULL,
    motorista_id INT NOT NULL,
    responsavel_id INT,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    data_utilizacao TIMESTAMP NULL,
    expirado TINYINT(1) DEFAULT 0,
    FOREIGN KEY (motorista_id) REFERENCES motoristas(id),
    FOREIGN KEY (responsavel_id) REFERENCES responsaveis(id)
);