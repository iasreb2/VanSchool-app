<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Código Enviado - VanSchool</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #333;
    }
    
    .container {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      max-width: 500px;
      width: 100%;
      text-align: center;
    }
    
    .title {
      font-size: 24px;
      margin-bottom: 25px;
      color: #a1001f;
    }
    
    .message {
      margin-bottom: 30px;
      line-height: 1.6;
    }
    
    .code-display {
      font-size: 28px;
      font-weight: bold;
      letter-spacing: 5px;
      color: #a1001f;
      background: #f9f9f9;
      padding: 15px;
      border-radius: 8px;
      margin: 20px 0;
    }
    
    .btn {
      display: inline-block;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: bold;
      background-color: #a1001f;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin: 10px;
    }
    
    .btn:hover {
      background-color: #c3002f;
    }
    
    .btn-secondary {
      background-color: #f8f8f8;
      color: #333;
      border: 1px solid #ddd;
    }
    
    .btn-secondary:hover {
      background-color: #e8e8e8;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="title">Código de Verificação Enviado!</h2>
    
    <div class="message">
      <p>Um e-mail foi enviado para <strong><?php echo isset($_SESSION['email_destino']) ? $_SESSION['email_destino'] : 'motorista@exemplo.com'; ?></strong> com o código de verificação.</p>
      
      <p>Para fins de demonstração, o código gerado é:</p>
      
      <div class="code-display">
        <?php echo isset($_SESSION['codigo_gerado']) ? $_SESSION['codigo_gerado'] : 'XXXXXX'; ?>
      </div>
      
      <p>Compartilhe este código com os responsáveis para que possam solicitar seu serviço.</p>
    </div>
    
    <div>
      <a href="painel_motorista.php" class="btn">Voltar ao Painel</a>
      <a href="codigo_verificacao.php" class="btn btn-secondary">Testar Validação</a>
    </div>
  </div>
</body>
</html>