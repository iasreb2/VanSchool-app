<?php
// Definindo o título da página
$pageTitle = "Meus Serviços - VanSchool";

// Determinar qual botão deve estar ativo com base na página atual
$currentPage = basename($_SERVER['PHP_SELF']);
$activeButton = 'todas'; // padrão

if ($currentPage === 'fixa.php') {
    $activeButton = 'fixe';
} elseif ($currentPage === 'vanuber.php') {
    $activeButton = 'vanuber';
}
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

        /* Filtros - FORA DO CONTAINER */
        .global-filters {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin: 20px 0;
            padding: 0 20px;
        }
        
        .filter-button {
            padding: 12px 25px;
            background-color: white;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            font-weight: bold;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .filter-button:hover, .filter-button.active {
            background-color: var(--primary-color);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }

        /* MAIN CONTENT - MAIS LARGO */
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
        
        /* Cards de serviços */
        .service-card {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--light-gray);
        }
        
        .driver-name {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        .driver-info {
            font-size: 16px;
            color: #666;
            margin-bottom: 5px;
        }
        
        .status-badge {
            display: inline-block;
            background-color: #e6f7e6;
            color: #2e7d32;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            margin: 15px 0;
        }
        
        .divider {
            height: 1px;
            background-color: #eee;
            margin: 20px 0;
        }
        
        .info-section {
            margin: 20px 0;
        }
        
        .info-title {
            font-weight: bold;
            margin-bottom: 10px;
            font-size: 18px;
            color: var(--primary-color);
        }
        
        .info-content {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }
        
        /* Botões de ação */
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .action-button {
            padding: 10px 20px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .action-button:hover {
            background-color: #8b1b1b;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
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
            
            .global-filters {
                flex-wrap: wrap;
            }
            
            .container {
                padding: 20px;
                margin: 15px;
            }
            
            .footer-nav {
                padding: 10px 0;
            }
            
            .nav-icon {
                font-size: 1.3rem;
            }
            
            .action-buttons {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .logo-image {
                height: 50px;
            }
            
            .footer-nav {
                font-size: 0.7rem;
            }
            
            .nav-icon {
                font-size: 1.2rem;
            }
            
            .filter-button {
                padding: 10px 20px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- HEADER MENOR -->
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
    
    <!-- FILTROS FORA DO CONTAINER -->
    <div class="global-filters">
        <button class="filter-button <?php echo $activeButton === 'todas' ? 'active' : ''; ?>" onclick="window.location.href='meusservicos.php'">Todas</button>
        <button class="filter-button <?php echo $activeButton === 'fixe' ? 'active' : ''; ?>" onclick="window.location.href='fixa.php'">Fixe</button>
        <button class="filter-button <?php echo $activeButton === 'vanuber' ? 'active' : ''; ?>" onclick="window.location.href='vanuber.php'">VanUber</button>
    </div>
    
    <!-- CONTEÚDO PRINCIPAL MAIS LARGO -->
    <div class="container">
        <h1 class="page-title">Meus serviços</h1>
        
       
    <!-- FOOTER NAVIGATION -->
    <nav class="footer-nav">
        <a href="meusservicos.php" class="nav-item <?php echo $currentPage === 'meusservicos.php' ? 'active' : ''; ?>">
            <i class="fas fa-user-shield nav-icon"></i>
            <span>Meus Serviços</span>
        </a>
        <a href="vanuber.php" class="nav-item <?php echo $currentPage === 'vanuber.php' ? 'active' : ''; ?>">
            <i class="fas fa-van-shuttle nav-icon"></i>
            <span>VanUber</span>
        </a>
        <a href="telainicialresponsavel.php" class="nav-item <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">
            <i class="fas fa-home nav-icon"></i>
            <span>Início</span>
        </a>
        <a href="notificacoes.php" class="nav-item <?php echo $currentPage === 'notificacoes.php' ? 'active' : ''; ?>">
            <i class="fas fa-bell nav-icon"></i>
            <span>Notificações</span>
        </a>
        <a href="conta.php" class="nav-item <?php echo $currentPage === 'conta.php' ? 'active' : ''; ?>">
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