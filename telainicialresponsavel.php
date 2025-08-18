<?php
// Inicia a sessão para manter o nome do usuário
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redireciona se não estiver logado
    exit();
}

include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="css/styleinicial.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
   
    
    <main class="container">
        <section class="welcome-section">
            <h1>Olá, <?php echo $_SESSION['usuario_nome']; ?></h1>
            <p>Bem-vindo ao seu app</p>
        </section>
        
        <section class="status-section card">
            <div class="status-container">
            <div class="status-title">Status da Rota</div>
            <div class="status-inativo">
             <i class="bi bi-check-circle"></i>Inativo
           </div>
          </div>
<p>Suas rotas aparecerão aqui</p>
        </section>
        
        <section class="vehicles-section card">
            <h2>Seus veículos</h2>
            <p>Cadastre um veículo e crie uma rota para iniciar!</p>
            
            <div class="action-buttons">
                   <li><a href="#" class="btn-start"><i class="bi bi-caret-right"></i> Iniciar</a></li>
                   <li><a href="#" class="btn-cadastro"></i> Cadastrar</a></li>
            </div>
        </section>
        
        <div class="grid-container">
            <!-- Card Rotas -->
            <a href="rotas.php" class="card clickable-card">
                <div class="card-icon">
                    <i class="bi bi-signpost-split"></i>
                </div>
                <h2>Rotas</h2>
                <p>Visualize e otimize suas rotas</p>
            </a>
            
            
            <!-- Card Passageiros -->
            <a href="passageiros.php" class="card clickable-card">
                <div class="card-icon">
                    <i class="bi bi-people"></i>
                </div>
                <h2>Passageiros</h2>
                <p>Gerencie sua lista de alunos</p>
            </a>
            
            <!-- Card Escolas -->
            <a href="escolas.php" class="card clickable-card">
                <div class="card-icon">
                    <i class="bi bi-buildings"></i>
                </div>
                <h2>Escolas</h2>
                <p>Gerencie seus destinos</p>
            </a>
            
            <!-- Card Ganhos -->
            <a href="ganhos.php" class="card clickable-card">
                <div class="card-icon">
                    <i class="bi bi-graph-up"></i>
                </div>
                <h2>Ganhos</h2>
                <p>Acompanhe seus rendimentos</p>
            </a>
        </div>
    </main>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>