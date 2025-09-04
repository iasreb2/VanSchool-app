<?php
session_start();
// Verifica se o responsável acabou de se cadastrar
if (!isset($_SESSION['temp_responsavel_logado'])) {
    header('Location: cadastro_responsavel.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o Próximo Passo</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        
        .container h2 {
            color: #800000;
            margin-bottom: 30px;
        }
        
        .btn {
            display: block;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        
        .btn-primary {
            background-color: #800000;
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #a00000;
        }
        
        .btn-secondary {
            background-color: #fff;
            color: #800000;
            border: 2px solid #800000;
        }
        
        .btn-secondary:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastro Realizado com Sucesso!</h2>
        <p>Olá, <?php echo $_SESSION['temp_responsavel_nome']; ?>! O que você deseja fazer agora?</p>
        
        <a href="cadastro_aluno.php" class="btn btn-primary">Cadastrar Aluno</a>
        <a href="fazer_login.php" class="btn btn-secondary">Fazer Login no Sistema</a>
    </div>
</body>
</html>