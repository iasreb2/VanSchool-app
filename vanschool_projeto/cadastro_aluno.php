<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Aluno</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #ffffff;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .title {
      text-align: center;
      margin-top: 30px;
      font-weight: bold;
      font-size: 22px;
    }

    .subtitle {
      color: #800000;
      font-size: 14px;
      text-align: center;
      max-width: 300px;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    .form-box {
      background-color: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
      padding: 20px;
      border-radius: 10px;
      width: 100%;
      max-width: 320px;
    }

    .form-box input, .form-box textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 12px;
      border: none;
      border-radius: 6px;
      background-color: #f1f1f1;
      font-size: 14px;
    }

    .upload-box {
      width: 100%;
      height: 100px;
      background-color: #f1f1f1;
      border-radius: 6px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-bottom: 12px;
      cursor: pointer;
    }

    .upload-box img {
      width: 24px;
      height: 24px;
      margin-bottom: 6px;
    }

    .upload-box span {
      font-size: 12px;
      color: #555;
    }

    .btn-submit {
      width: 100%;
      padding: 12px;
      background-color: #800000;
      color: #fff;
      font-weight: bold;
      font-size: 15px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      margin-top: 10px;
    }

    .btn-skip {
      margin-top: 15px;
      text-align: right;
      width: 100%;
      max-width: 320px;
    }

    .btn-skip a {
      color: #800000;
      font-size: 13px;
      text-decoration: none;
      font-weight: 500;
    }

    .btn-skip a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="title">BEM–VINDO</div>
  <div class="subtitle">
    Preencha as informações abaixo para cadastrar o aluno no app e vinculá-lo ao transporte escolar.
  </div>

  <form class="form-box" action="salvar_aluno.php" method="POST" enctype="multipart/form-data">
    <input type="text" name="nome_aluno" placeholder="Nome Completo" required>
    <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required>

    <label class="upload-box">
      <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" alt="Upload Icon">
      <span>Toque para adicionar</span>
      <input type="file" name="foto" accept="image/*" style="display: none;">
    </label>

    <input type="text" name="endereco_embarque" placeholder="Endereço de Embarque (ex: sua Casa)" required>
    <input type="text" name="endereco_desembarque" placeholder="Endereço de Desembarque (ex: escola)" required>
    <input type="text" name="telefone_emergencia" placeholder="Telefone de Contato para Emergências" required>
    <textarea name="observacoes" placeholder="Observações (ex: alergias, quem pode retirar o aluno da van...)" rows="3"></textarea>

    <button type="submit" class="btn-submit">Cadastrar Aluno</button>
  </form>

  <div class="btn-skip">
    <a href="proxima_pagina.php">Pular Etapa</a>
  </div>
</body>
</html>
