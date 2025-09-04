<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Rotas Cadastradas</title>
    <style>
       body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .header {
            display: flex;
            align-items: center;
            padding: 16px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .back-button {
            border: none;
            background: none;
            font-size: 24px;
            cursor: pointer;
            margin-right: 16px;
            color: #333;
        }
        
        .title {
            font-size: 15px;
            font-weight: 500;
        }
        
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 120px);
            text-align: center;
            padding: 20px;
        }
        
        .empty-state {
            font-size: 18px;
            color: #666;
            margin-bottom: 24px;
        }
        
        .register-button {
            background-color: white; /* Fundo branco */
            color: #8b1b1b; /* Texto vermelho */
            border: 2px solid #8b1b1b; /* Borda vermelha */
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .register-button:hover {
            background-color: #f8f9fa; /* Fundo levemente cinza no hover */
            color: #bb2d3b; /* Texto vermelho mais escuro no hover */
            border-color: #bb2d3b; /* Borda vermelha mais escura no hover */
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="telainicialmotorista.php"><button class="back-button"><i class="bi bi-chevron-left"></i></button></a>

    </div>
    
    <div class="content">
        <p class="empty-state">Você ainda não tem rotas cadastradas.</p>
        <a href="criar-rota.php"><button class="register-button">Cadastrar</button>
    </div>
    
    <script>
        function goBack() {
            // Redireciona para a tela inicial
            window.location.href = "index.php";
        }
    </script>
</body>
</html>