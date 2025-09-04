<?php
// Definindo o título da página
$pageTitle = "Conta - VanSchool";

// Determinar qual botão deve estar ativo com base na página atual
$currentPage = basename($_SERVER['PHP_SELF']);
$activeButton = 'conta';

// Determinar item ativo do footer
$footerActive = 'conta';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #6d071a;
            --secondary-color: #f8f9fa;
            --text-color: #333;
            --light-gray: #e9ecef;
            --border-radius: 8px;
            --box-shadow: 0 2px 10px rgba(0, 0, 0, 0.042);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            padding-bottom: 70px;
        }

        /* HEADER STYLES */
        .main-header {
            padding: 0;
            margin: 0;
            background: white;
            border-bottom: 2px solid #e0e0e0;
        }

        .header-container {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px 20px;
        }

        .logo-image {
            height: 80px;
            margin: 5px 0;
            object-fit: contain;
        }

        .search-container {
            flex-grow: 1;
            margin: 0 20px;
            position: relative;
        }

        .search-bar {
            width: 100%;
            padding: 12px 20px;
            padding-left: 45px;
            border: 1px solid #ddd;
            border-radius: 30px;
            font-size: 1rem;
            background-color: #f8f8f8;
            transition: all 0.3s;
        }

        .search-bar:focus {
            outline: none;
            border-color: var(--primary-color);
            background-color: white;
            box-shadow: 0 0 0 2px rgba(109, 7, 26, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), #8b1b1b);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        /* MAIN CONTENT */
        .container {
            max-width: 1000px;
            margin: 0 auto 30px;
            padding: 25px;
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .page-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #000;
            text-align: center;
        }
        
        /* Perfil do Usuário */
        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--light-gray);
        }
        
        .profile-info {
            flex: 1;
        }
        
        .user-name {
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 10px;
        }
        
        .edit-profile {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--primary-color);
            font-weight: bold;
            text-decoration: none;
            margin-bottom: 15px;
        }
        
        .edit-profile:hover {
            text-decoration: underline;
        }
        
        .settings-button {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .settings-button:hover {
            background-color: #8b1b1b;
            transform: rotate(30deg);
        }
        
        /* Alunos Registrados */
        .students-section {
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 20px;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 15px;
        }
        
        .students-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        .student-card {
            background-color: #f9f9f9;
            border-radius: var(--border-radius);
            padding: 15px;
            border: 1px solid var(--light-gray);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .student-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .student-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), #8b1b1b);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 18px;
        }
        
        .student-name {
            font-weight: bold;
            font-size: 16px;
            color: #333;
        }
        
        .student-nickname {
            font-size: 14px;
            color: #666;
            margin-top: 3px;
        }
        
        .student-badge {
            background-color: var(--primary-color);
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
        }
        
        .add-student-button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            padding: 12px 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 15px;
        }
        
        .add-student-button:hover {
            background-color: #8b1b1b;
            transform: translateY(-2px);
        }
        
        /* FOOTER NAVIGATION */
        .footer-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            display: flex;
            justify-content: space-around;
            padding: 12px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            border-top: 1px solid #e0e0e0;
            z-index: 1000;
        }

        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: #666;
            font-size: 0.8rem;
            flex: 1;
        }

        .nav-item.active {
            color: var(--primary-color);
        }

        .nav-icon {
            font-size: 1.4rem;
            margin-bottom: 4px;
        }

        .nav-home {
            color: var(--primary-color);
        }

        /* RESPONSIVIDADE */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
                gap: 8px;
            }
            
            .search-container {
                margin: 8px 0;
                width: 100%;
            }
            
            .container {
                padding: 20px;
                margin: 15px;
            }
            
            .profile-header {
                flex-direction: column;
                gap: 15px;
            }
            
            .footer-nav {
                padding: 10px 0;
            }
            
            .nav-icon {
                font-size: 1.3rem;
            }
            
            .student-card {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }
            
            .student-info {
                flex-direction: column;
                text-align: center;
            }
        }

        @media (max-width: 480px) {
            .logo-image {
                height: 60px;
            }
            
            .footer-nav {
                font-size: 0.7rem;
            }
            
            .nav-icon {
                font-size: 1.2rem;
            }
            
            .user-name {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <header class="main-header">
        <div class="header-container">
            <img src="img/vanschool.png" alt="VamSchool Logo" class="logo-image">
            
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-bar" placeholder="Procure por uma Van...">
            </div>
            
            <div class="user-info">
                <div class="user-avatar">
                    <i class="fas fa-user"></i>
                </div>
                <div>
                    <div style="font-weight: 600; font-size: 14px;">Usuário</div>
                    <div style="font-size: 0.7rem; color: #666;">Responsável</div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- CONTEÚDO PRINCIPAL -->
    <div class="container">
        <h1 class="page-title">Conta</h1>
        
        <!-- Perfil do Usuário -->
        <div class="profile-header">
            <div class="profile-info">
                <div class="user-name">Usuário</div>
                <a href="editarPerfil.php" class="edit-profile">
                    <i class="fas fa-edit"></i>
                    <span>Editor Perfil</span>
                </a>
            </div>
            
            <button class="settings-button" onclick="window.location.href='config.php'">
                <i class="fas fa-cog"></i>
            </button>
        </div>
        
        <!-- Alunos Registrados -->
        <div class="students-section">
            <div class="section-title">Alunos registrados:</div>
            
            <div class="students-list">
                <!-- Aluno 1 -->
               
                
                <!-- Botão Adicionar Aluno -->
                <button class="add-student-button" onclick="window.location.href='adicionarAluno.php'">
                    <i class="fas fa-plus"></i>
                    <span>Adicionar aluno</span>
                </button>
            </div>
        </div>
    </div>
    
    <!-- FOOTER NAVIGATION -->
    <nav class="footer-nav">
        <a href="meusservicos.php" class="nav-item">
            <i class="fas fa-user-shield nav-icon"></i>
            <span>Meus Serviços</span>
        </a>
        <a href="vanuber.php" class="nav-item">
            <i class="fas fa-van-shuttle nav-icon"></i>
            <span>VanUber</span>
        </a>
        <a href="telainicialresponsavel.php" class="nav-item">
            <i class="fas fa-home nav-icon"></i>
            <span>Início</span>
        </a>
        <a href="notificacoes.php" class="nav-item">
            <i class="fas fa-bell nav-icon"></i>
            <span>Notificações</span>
        </a>
        <a href="conta.php" class="nav-item active">
            <i class="fas fa-user nav-icon"></i>
            <span>Conta</span>
        </a>
    </nav>

    <script>
        // Adicionar evento de clique para a barra de pesquisa
        document.querySelector('.search-bar').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                alert('Buscar por: ' + this.value);
                // Aqui você pode redirecionar para resultados de busca
            }
        });
    </script>
</body>
</html>