<?php 
include 'conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){//SERVER faz o requisito para utilizar POST(formulário html). Os 3 iguais significam idêntico. 
    $nome_aluno = $_POST['nome_aluno'];
    $data_nascimento = $_POST['data_nascimento'];
    $endereco_embarque = $_POST['endereco_embarque'];
    $endereco_desembarque = $_POST['endereco_desembarque'];
    $observacoes = $_POST['observacoes'];

    $foto_aluno = '';//valor vazio pois o usuário que cadastra
    if(isset($_FILES['foto_aluno']) && $_FILES['foto_aluno']['error'] === UPLOAD_ERR_OK) {//isset verifica se o file de imagem não é nulo e não tem erro, se tudo isso acontecer, o arquivo é idêntico a UPLOAD_ERR_OK, algo que inidica que foi sucesso.
        $ext = pathinfo($_FILES['fotos']['name'], PATHINFO_EXTENSION);//pathinfo são as informações de caminho, mas também TODAS as informações do arquivo. O EXTENSION reconhece o tipo de arquivo, png, jpg etc
        $foto = uniqid() . '.' . $ext;//gera nome da foto conforme data e hora.
        move_uploaded_file($_FILES['fotos']['tmp_name'], 'uploads/'. $foto);//move arquivos para uma pasta temporária, para que não haja sobrecarga no servidor
    }

    $stmt = $pdo->prepare('INSERT INTO alunos (nome_aluno, data_nascimento, endereco_embarque, endereco_desembarque,observacoes, foto_aluno) VALUES(?,?,?,?,?)');
    $stmt->execute([$titulo, $autor, $genero, $ano_publicacao, $foto]);

    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Motorista</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    /* FORÇA a correção caso o style.css esteja com conflitos */
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: color: #FFFFFF;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .form-container {
      background-color: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #800000; /* vinho */
    }

    .form-container form {
      display: flex;
      flex-direction: column;
    }

    .form-container input {
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 15px;
    }

    .form-container button {
      padding: 12px;
      background-color: #800000; /* amarelo escuro */
      color: white;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .form-container button:hover {
      background-color: #800000;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Cadastro de Motorista</h2>
    <form action="salvar_motorista.php" method="POST">
      <input type="text" name="nome" placeholder="Nome Completo" required>
      <input type="text" name="cpf" placeholder="CPF" required>
      <input type="text" name="cnh" placeholder="CNH" required>
      <input type="text" name="telefone" placeholder="Telefone" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>
