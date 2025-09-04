<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Escolha de Cadastro - VanSchool</title>
  <style>
    /* Reset e estilos base */
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body.login-page {
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 25px;
      padding: 40px 30px;
      background-color: #fff;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 450px;
      text-align: center;
    }

    .title {
      font-size: clamp(1.5rem, 5vw, 1.8rem);
      color: #7c0f1c;
      font-weight: bold;
      line-height: 1.3;
    }

    .subtitle {
      color: #555;
      font-size: clamp(0.9rem, 3vw, 1rem);
      line-height: 1.4;
      max-width: 300px;
    }

    .btn-option {
      background-color: #7c0f1c;
      color: #fff;
      padding: clamp(14px, 4vw, 16px) clamp(20px, 5vw, 30px);
      border: none;
      border-radius: 12px;
      text-decoration: none;
      font-size: clamp(1rem, 4vw, 1.1rem);
      font-weight: bold;
      width: 100%;
      text-align: center;
      transition: all 0.3s ease;
      box-shadow: 0 4px 8px rgba(124, 15, 28, 0.2);
      display: block;
      margin-bottom: 15px;
    }

    .btn-option:hover {
      background-color: #a31529;
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(124, 15, 28, 0.3);
    }

    .btn-option:active {
      transform: translateY(0);
      box-shadow: 0 2px 4px rgba(124, 15, 28, 0.2);
    }

    .divider {
      display: flex;
      align-items: center;
      width: 100%;
      margin: 15px 0;
      color: #777;
    }

    .divider::before,
    .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background-color: #ddd;
    }

    .divider-text {
      padding: 0 15px;
      font-size: clamp(0.8rem, 3vw, 0.9rem);
    }

    .login-link {
      margin-top: 10px;
      color: #7c0f1c;
      text-decoration: none;
      font-weight: 500;
      font-size: clamp(0.9rem, 3vw, 1rem);
      transition: color 0.3s ease;
      padding: 8px 12px;
      border-radius: 6px;
    }

    .login-link:hover {
      color: #a31529;
      text-decoration: underline;
      background-color: rgba(124, 15, 28, 0.05);
    }

    /* Melhorias de acessibilidade para mobile */
    @media (max-width: 480px) {
      body.login-page {
        padding: 15px;
        align-items: flex-start;
        padding-top: 40px;
      }
      
      .container {
        padding: 30px 20px;
        gap: 20px;
        border-radius: 16px;
      }
      
      .btn-option {
        padding: 16px 20px;
        margin-bottom: 12px;
      }
      
      /* Garantir que os botões sejam tocáveis em mobile */
      .btn-option, .login-link {
        min-height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
    }

    /* Para telas muito pequenas (smartphones pequenos) */
    @media (max-width: 350px) {
      .container {
        padding: 25px 15px;
      }
      
      .title {
        font-size: 1.3rem;
      }
      
      .btn-option {
        font-size: 0.95rem;
        padding: 14px 16px;
      }
    }

    /* Para tablets e telas maiores */
    @media (min-width: 768px) {
      .container {
        padding: 50px 40px;
      }
    }

    /* Modo retrato em dispositivos móveis */
    @media (max-height: 600px) and (orientation: portrait) {
      body.login-page {
        padding-top: 30px;
        padding-bottom: 30px;
        align-items: flex-start;
      }
      
      .container {
        gap: 20px;
        padding: 30px 25px;
      }
    }

    /* Modo paisagem em dispositivos móveis */
    @media (max-height: 400px) and (orientation: landscape) {
      body.login-page {
        padding: 10px;
        align-items: center;
      }
      
      .container {
        padding: 20px;
        gap: 15px;
      }
      
      .subtitle {
        display: none;
      }
      
      .divider {
        margin: 10px 0;
      }
    }

    /* Melhorias para telas de alta resolução */
    @media (min-resolution: 120dpi) {
      .btn-option {
        border: 1px solid rgba(0, 0, 0, 0.1);
      }
    }

    /* Prevenir zoom em iOS ao tocar em inputs */
    @media (max-width: 768px) {
      input, select, textarea {
        font-size: 16px !important;
      }
    }
  </style>
</head>
<body class="login-page">
  <div class="container">
    <h2 class="title">Você é:</h2>
    <p class="subtitle">Selecione uma opção de cadastro</p>
    
    <a href="cadastro_motorista.php" class="btn-option">Motorista</a>
    <a href="cadastro_responsavel.php" class="btn-option">Responsável</a>
    
    <div class="divider">
      <span class="divider-text">ou</span>
    </div>
    
    <a href="login_form.php" class="login-link">Já tem uma conta? Faça login</a>
  </div>
</body>
</html>