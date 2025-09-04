<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VamSchool - Sistema de Transporte Escolar</title>
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


        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }
        

        .search-bar:focus {
            outline: none;
            border-color: var(--primary-color);
            background-color: white;
            box-shadow: 0 0 0 2px rgba(109, 7, 26, 0.1);
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
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .welcome-section {
            color: white;
            font-size: 1.5rem;
            margin: 20px 0;
            padding: 15px;
            background-color: var(--primary-color);
            border-radius: var(--border-radius);
        }

        .welcome-section .subtitle {
            color: white;
            font-size: 1rem;
            margin-top: 5px;
        }

        /* GRID CARDS */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background-color: white;
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--box-shadow);
            border: 1px solid var(--light-gray);
            text-align: center;
            transition: transform 0.2s;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            color: var(--text-color);
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        .card p {
            color: var(--text-color);
            opacity: 0.8;
            font-size: 0.9rem;
        }

        .card-icon {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 15px;
        }

        /* RECOMMENDATIONS */
        .recommendations {
            background: white;
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--box-shadow);
            margin-top: 30px;
            border: 1px solid var(--light-gray);
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--text-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .see-all {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .recommendation-item {
            display: flex;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .recommendation-item:last-child {
            border-bottom: none;
        }

        .rec-avatar {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: linear-gradient(135deg, var(--primary-color), #8b1b1b);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: white;
            font-weight: bold;
        }

        .rec-content {
            flex: 1;
        }

        .rec-title {
            font-weight: 600;
            margin-bottom: 4px;
            font-size: 1rem;
        }

        .rec-desc {
            color: #666;
            font-size: 0.85rem;
        }

        .rec-rating {
            color: #FFD700;
            font-weight: 500;
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
                gap: 10px;
            }
            
            .search-container {
                margin: 10px 0;
                width: 100%;
            }
            
            .grid-container {
                grid-template-columns: 1fr 1fr;
            }
            
            .footer-nav {
                padding: 10px 0;
            }
            
            .nav-icon {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 480px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
            
            .logo-image {
                height: 60px;
            }
            
            .footer-nav {
                font-size: 0.7rem;
            }
            
            .nav-icon {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
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
                    <!-- Nome será carregado dinamicamente após login -->
                    <div style="font-weight: 600;">Usuário</div>
                    <div style="font-size: 0.8rem; color: #666;">Responsável</div>
                </div>
            </div>
        </div>
    </header>
    
    <main class="container">
        <section class="welcome-section">
            <h1>Olá, Responsável</h1>
        
        </section>
        
        <div class="grid-container">
            <!-- Card Rotas -->
            <div class="card" onclick="navigateTo('rotas.php')">
                <div class="card-icon">
                    <i class="fas fa-route"></i>
                </div>
                <h2>Rotas</h2>
                <p>Visualize e otimize suas rotas</p>
            </div>
            
            <!-- Card Alunos -->
            <div class="card" onclick="navigateTo('alunos.php')">
                <div class="card-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <h2>Alunos</h2>
                <p>Gerencie sua lista de alunos</p>
            </div>
            
            <!-- Card VanUber -->
            <div class="card" onclick="navigateTo('mdisponivel.php')">
                <div class="card-icon">
                    <i class="fas fa-van-shuttle"></i>
                </div>
                <h2>VanUber</h2>
                <p>Motoristas disponíveis</p>
            </div>
            
            <!-- Card Pendências -->
            <div class="card" onclick="navigateTo('pendencias.php')">
                <div class="card-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <h2>Pendências</h2>
                <p>Acompanhe suas pendências</p>
            </div>
        </div>
        
        <section class="recommendations">
            <div class="section-title">
                <span>Recomendações</span>
                <a href="vermais.php" class="see-all">Ver todas</a>
            </div>
            
           
            
        </section>
    </main>
    
    <nav class="footer-nav">
        <a href="meusservicos.php" class="nav-item">
            <i class="fas fa-user-shield nav-icon"></i>
            <span>Meus Serviços</span>
        </a>
        <a href="vanuber.php" class="nav-item">
            <i class="fas fa-van-shuttle nav-icon"></i>
            <span>VanUber</span>
        </a>
        <a href="responsavel/telainicialresponsavel.php" class="nav-item nav-home active">
            <i class="fas fa-home nav-icon"></i>
            <span>Início</span>
        </a>
        <a href="notificacoes.php" class="nav-item">
            <i class="fas fa-bell nav-icon"></i>
            <span>Notificações</span>
        </a>
        <a href="conta.php" class="nav-item">
            <i class="fas fa-user nav-icon"></i>
            <span>Conta</span>
        </a>
    </nav>

    <script>
        // Função para navegar para outras páginas
        function navigateTo(page) {
            window.location.href = page;
        }

        // Simulação de carregamento do nome do usuário após login
        document.addEventListener('DOMContentLoaded', function() {
            // Em uma aplicação real, isso viria de uma API ou sistema de autenticação
            const userName = localStorage.getItem('userName') || 'Usuário';
            document.querySelector('.user-info div div:first-child').textContent = userName;
            
            // Adicionar evento de clique para a barra de pesquisa
            document.querySelector('.search-bar').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    alert('Buscar por: ' + this.value);
                    // Aqui você pode redirecionar para resultados de busca
                }
            });
        });
    </script>
</body>
</html>