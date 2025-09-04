
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Criando Rotas</title>
    <style>
        :root {
            --vinho: #6d071a;
            --vinho-escuro: #5a0616;
            --branco: #ffffff;
            --preto: #000000;
            --cinza-claro: #f9f9f9;
            --cinza-hover: #f0f0f0;
            --cinza-borda: #e0e0e0;
            --cinza-texto: #333333;
            --rosa-bg: #d48392;
            --sombra: 0 2px 4px rgba(0,0,0,0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #333;
        }

        /* Header */
        .main-header {
    padding: 0;
    margin: 0;
    background: white;
     border-bottom: 2px solid #e0e0e0; /* Cinza claro */
}

/* CONTAINER PRINCIPAL */
.header-container {
    display: flex;
    align-items: center;
    width: 100%;
}
.logo-image {
    height: 100px;
}

/* LOGO COLADO À ESQUERDA */
.logo-left {
    height: 50px;
    margin: 5px 0 5px 5px; /* MARGEM MÍNIMA ESQUERDA */
    object-fit: contain;
}

/* CONTEÚDO À DIREITA */
.content-right {
    display: flex;
    flex-grow: 1;
    justify-content: space-between;
    align-items: center;
    padding-left: 15px;
}

/* NAVBAR */
.main-nav ul {
    display: flex;
    gap: 10px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.main-nav a {
    display: flex;
    align-items: center;
    gap: 5px;
    padding: 8px 10px;
    color: #333;
    text-decoration: none;
}
.main-nav {
    margin-left: auto; /* Empurra a navbar para a direita */
}

.main-nav ul {
    display: flex;
    list-style: none;
    gap: 10px;
    margin: 0;
    padding: 0;
}

.main-nav li a {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    color: #555;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.2s;
}

.main-nav li a:hover,
.main-nav li a.active {
    color: #000000;
}

/* Ícones */
.main-nav li a i {
    font-size: 1rem;
}

.main-nav li a i {
    width: 20px;
    text-align: center;
    font-size: 1.1rem;
}

.main-nav li a:hover, 
.main-nav li a.active {
    color: var(--primary-color);
    background-color: var(--light-gray);
}

/* Ajuste para ícones específicos */
.fa-bus { font-size: 1rem; }
.fa-route { transform: rotate(90deg); }

        .main-nav li a:hover,
        .main-nav li a.active {
            color: var(--vinho);
            background-color: var(--cinza-hover);
        }

        .main-nav li a i {
            font-size: 1rem;
            width: 20px;
            text-align: center;
        }

        /* Conteúdo Principal */
        .header {
            display: flex;
            align-items: center;
            padding: 16px;
            background-color: var(--branco);
            box-shadow: var(--sombra);
        }

        .title {
            font-size: 30px;
            font-weight: 500;
            text-align: center;
            width: 100%;
        }

        .content {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .route-subtitle {
            color: var(--cinza-texto);
            font-size: 1rem;
            margin: 20px 50px;
            padding: 15px;
            background-color: var(--rosa-bg);
            border-radius: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .route-items {
            background-color: var(--branco);
            border-radius: 8px;
            padding: 20px;
            box-shadow: var(--sombra);
            margin-bottom: 30px;
        }

        .route-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 15px;
        }

        /* Botões */
        .option-button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 12px 15px;
            border: 1px solid var(--preto); /* Borda preta */
            border-radius: 6px;
            background-color: var(--cinza-claro);
            cursor: pointer;
            transition: all 0.2s;
            width: 100%;
            font-size: 16px;
            color: var(--preto); /* Texto preto */
            text-align: center;
        }

        .option-button:hover {
            background-color: var(--cinza-hover);
        }

        .option-icon {
            margin-right: 10px;
            font-size: 1.2rem;
            color: var(--preto); /* Ícone preto */
        }

        .divider {
            border: none;
            height: 1px;
            background-color: #eee;
            margin: 15px 0;
        }

        .simple-button {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: var(--cinza-claro);
            color: var(--cinza-texto);
            font-size: 16px;
            text-align: left;
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 10px;
        }

        .simple-button:hover {
            background-color: var(--cinza-hover);
        }
        a {
        text-decoration: none;
        color: inherit;
       }


        .wine-button {
            display: block;
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 6px;
            background-color: var(--vinho);
            color: var(--branco);
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            margin-bottom: 10px;
        }

        .wine-button:hover {
            background-color: var(--vinho-escuro);
            color: var(--branco);
        }

        .action-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .btn {
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--branco);
            color: #dc3545;
            border: 2px solid #dc3545;
        }

        .btn-primary:hover {
            background-color: #f8f9fa;
            color: #bb2d3b;
            border-color: #bb2d3b;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: 2px solid #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        b {
            font-weight: bold;
        }
        /* RESPONSIVIDADE PARA MOBILE */
@media (max-width: 768px) {
    /* Ajusta o cabeçalho */
    .header-container {
        flex-direction: column;
        align-items: flex-start;
        padding: 10px;
    }

    /* Logo e título empilhados */
    .logo-title-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 5px;
        width: 100%;
    }

    .logo-left {
        height: 40px;
    }

    .header-title-text, .title {
        font-size: 22px;
        text-align: center;
        width: 100%;
    }

    /* Navbar em coluna */
    .main-nav ul {
        flex-direction: column;
        gap: 5px;
        width: 100%;
        margin-top: 10px;
    }
    .main-nav li a {
        justify-content: center;
        padding: 10px;
    }

    /* Conteúdo */
    .content {
        padding: 15px;
        max-width: 100%;
    }

    .route-subtitle {
        margin: 15px 0;
        flex-direction: column;
        text-align: center;
        font-size: 0.95rem;
    }

    /* Botões ocupam largura total */
    .option-button,
    .simple-button,
    .wine-button,
    .btn {
        font-size: 14px;
        padding: 10px;
        width: 100%;
    }

    /* Ações empilhadas */
    .action-buttons {
        flex-direction: column;
    }
}
    </style>
</head>
<body>
     <?php include 'includes/header.php'; ?>
    <div class="header">
        <h1 class="title"><b>Criando Rotas</b></h1>
    </div>
    
    <div class="content">
        <p class="route-subtitle"><i class="bi bi-exclamation-circle"></i> Organize o itinerário do motorista, especificando a sequência de embarque e desembarque dos alunos em suas residências, bem como as paradas nas escolas.</p>
        
        <div class="route-items">
            <h3>Itens da Rota</h3>
            <div class="route-options">
                <a href= "adicionar-estudante.php"><button class="option-button">
                    <i class="bi bi-person-fill-add option-icon"></i>
                    Adicionar estudante
                </button>
                <a href="adicionar-escola.php"><button class="option-button">
                    <i class="bi bi-buildings option-icon"></i>
                    Adicionar escola
                </button>
                
                <hr class="divider">
                

                <a href="cadastrar-rota.php"><button class="wine-button">Cadastrar Rota</button>
                 <a href="telainicialmotorista.php"><button class="wine-button">Voltar</button>
            </div>
        </div>
        
        <div class="action-buttons">
            <a href="#" class="btn btn-primary">Visualizar rotas</a>
            <a href="telainicialmotorista.php" class="btn btn-secondary">Ir para a tela inicial</a>
        </div>
    </div>
</body>
</html>