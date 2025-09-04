<?php session_start(); 
if (!isset($_SESSION['codigo_valido'])) {
    header('Location: codigo_verificacao.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Código Validado - VanSchool</title>
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
    
    .success-icon {
      font-size: 60px;
      color: #4CAF50;
      margin-bottom: 20px;
    }
    
    .title {
      font-size: 24px;
      margin-bottom: 25px;
      color: #4CAF50;
    }
    
    .message {
      margin-bottom: 30px;
      line-height: 1.6;
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
    }
    
    .btn:hover {
      background-color: #c3002f;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="success-icon">✓</div>
    <h2 class="title">Código Validado com Sucesso!</h2>
    
    <div class="message">
      <p>Parabéns! O código de verificação foi validado com sucesso.</p>
      <p>Agora você pode solicitar serviços do motorista vinculado a este código.</p>
    </div>
    
    <a href="solicitar_servico.php?motorista=<?php echo $_SESSION['motorista_id']; ?>" class="btn">Solicitar Serviço</a>
  </div>
</body>
</html>