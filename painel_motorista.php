<?php 
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] !== 'motorista') {
    header('Location: login_form.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel do Motorista - VanSchool</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f9f9f9;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      text-align: center;
    }
    h1 {
      color: #800000;
      margin-bottom: 10px;
    }
    .welcome {
      color: #555;
      margin-bottom: 30px;
    }
    .codigo-demo {
      background: #f0f0f0;
      padding: 20px;
      border-radius: 8px;
      margin: 30px 0;
      text-align: center;
    }
    .codigo {
      font-size: 28px;
      font-weight: bold;
      color: #800000;
      letter-spacing: 3px;
      margin: 10px 0;
    }
    .btn {
      display: inline-block;
      padding: 12px 25px;
      background: #800000;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      margin: 10px;
      font-weight: bold;
      transition: background 0.3s;
      border: none;
      cursor: pointer;
    }
    .btn:hover {
      background: #a00000;
    }
    .btn-primary {
      background: #800000;
    }
    .btn-secondary {
      background: #555;
    }
    .btn-container {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Painel do Motorista</h1>
    <p class="welcome">Bem-vindo, <?php echo $_SESSION['nome']; ?>!</p>
    
    <div class="codigo-demo">
      <h3>Código de Verificação para Demonstração</h3>
      <div class="codigo">123456</div>
      <p>Compartilhe este código com os responsáveis para que possam solicitar seus serviços.</p>
    </div>
    
    <div class="btn-container">
      <a href="motorista/telainicialmotorista.php" class="btn btn-primary">Ir para Tela Principal</a>
      <a href="logout.php" class="btn btn-secondary">Sair</a>
    </div>
  </div>
</body>
</html>