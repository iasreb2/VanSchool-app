<?php
session_start();
// Se já estiver logado, redireciona para a tela inicial
if (isset($_SESSION['usuario_id'])) {
    header('Location: telainicialresponsavel.php');
    exit();
}

// Se veio de um cadastro temporário, mostra mensagem
$aluno_cadastrado = isset($_GET['aluno_cadastrado']) ? true : false;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Fazer Login</h2>
        
        <?php if ($aluno_cadastrado): ?>
        <div class="success-message">
            Aluno cadastrado com sucesso! Agora faça login para acessar o sistema.
        </div>
        <?php endif; ?>
        
        <form action="processa_login.php" method="POST">
            <input type="email" name="email" placeholder="Email" 
                   value="<?php echo isset($_SESSION['temp_responsavel_email']) ? $_SESSION['temp_responsavel_email'] : ''; ?>" 
                   required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        
        <p>Não tem conta? <a href="cadastro_responsavel.php">Cadastre-se</a></p>
    </div>
</body>
</html>