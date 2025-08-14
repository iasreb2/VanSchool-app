<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Código de Verificação</title>
</head>
<body class="login-page">
  <div class="container">
    <h2 class="title">Código de Verificação</h2>
    <form action="validar_codigo.php" method="POST" class="form">
      <input type="text" name="codigo" maxlength="6" placeholder="Código" required>
      <button type="submit" class="btn">Validar</button>
    </form>
  </div>
</body>
</html>