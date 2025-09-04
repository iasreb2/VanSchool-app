<?php
session_start();
include 'include/conexao.php';

// Simulação: ID do motorista (em um sistema real, viria da sessão ou parâmetro)
$motorista_id = 1;

// Gerar código aleatório de 6 dígitos
$codigo = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

// Inserir código no banco de dados
try {
    $stmt = $pdo->prepare('INSERT INTO codigos_verificacao (codigo, motorista_id) VALUES (?, ?)');
    $stmt->execute([$codigo, $motorista_id]);
    
    // Simular envio por e-mail
    $email_destino = "motorista@exemplo.com"; // Email do motorista
    $assunto = "Seu código de verificação VanSchool";
    $mensagem = "Olá! Seu código de verificação é: $codigo. Compartilhe este código com os responsáveis para que possam solicitar seu serviço.";
    
    // Em ambiente de produção, usar mail() ou biblioteca de e-mail
    // mail($email_destino, $assunto, $mensagem);
    
    // Para demonstração, vamos armazenar o código na sessão
    $_SESSION['codigo_gerado'] = $codigo;
    $_SESSION['email_destino'] = $email_destino;
    
    // Redirecionar para página de confirmação
    header('Location: codigo_enviado.php');
    exit();
    
} catch (PDOException $e) {
    echo "Erro ao gerar código: " . $e->getMessage();
}
?>