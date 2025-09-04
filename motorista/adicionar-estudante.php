<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Escolha o Estudante</title>
    <style>
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
            justify-content: space-between;
        }
        
        .logo-left {
            height: 50px;
            margin: 5px 0 5px 5px;
            object-fit: contain;
        }

        .main-nav {
            margin-left: auto;
        }
        
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

        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }
        
        .header {
            display: flex;
            align-items: center;
            padding: 16px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .back-button {
            border: none;
            background: none;
            font-size: 24px;
            cursor: pointer;
            margin-right: 16px;
            color: #333;
        }
        
        .title {
            font-size: 20px;
            font-weight: 700;
        }
        
        .content {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .page-title {
            font-size: 24px;
            font-weight: 500;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .students-list {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .student-item {
            padding: 12px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }
        
        .student-item:last-child {
            border-bottom: none;
        }
        
        .checkbox {
            margin-right: 15px;
            width: 20px;
            height: 20px;
        }
        
        .student-info {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }
        
        .student-name {
            font-weight: 500;
        }
        
        .student-school {
            font-size: 14px;
            color: #666;
            margin-top: 2px;
            display: flex;
            align-items: center;
            gap: 5px;
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
            background-color: white;
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
        
        .search-bar {
            margin-bottom: 20px;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }
        
        .no-results {
            text-align: center;
            color: #666;
            padding: 20px;
            display: none;
        }
          .no-results {
            text-align: center;
            color: #666;
            padding: 20px;
            display: none;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }
        
        .btn-add {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-add:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <img src="logo.png" alt="Logo" class="logo-left">
            <nav class="main-nav">
                <ul>
                    <li><a href="#"><i class="bi bi-house"></i> Início</a></li>
                    <li><a href="#"><i class="bi bi-gear"></i> Configurações</a></li>
                    <li><a href="#"><i class="bi bi-person"></i> Perfil</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="header">
        <a href="javascript:history.back()"><button class="back-button"><i class="bi bi-arrow-left"></i></button></a>
        <h1 class="title">Escolha o Estudante</h1>
    </div>
    
    <div class="content">
        <h2 class="page-title">Escolha o Estudante</h2>
        
        <div class="search-bar">
            <input type="text" id="searchInput" class="search-input" placeholder="Pesquisar estudante..." onkeyup="filterStudents()">
            <i class="bi bi-search search-icon"></i>
        </div>
        
       <div class="students-list" id="studentsList">
    <div class="student-item" data-name="aline ramos">
        <div class="student-info">
            <span class="student-name">Aline Ramos</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Anibal de Freitas</span>
            </span>
        </div>
        <a href="editar-info.php?id=1" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="caio luccas">
        <div class="student-info">
            <span class="student-name">Caio Luccas</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Pastor Dom Bosco</span>
            </span>
        </div>
         <a href="editar-info.php?id=2" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="tomas silva">
        <div class="student-info">
            <span class="student-name">Tomas Silva</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Culto à Ciência</span>
            </span>
        </div>
       <a href="editar-info.php?id=3" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="yuri lopes">
        <div class="student-info">
            <span class="student-name">Yuri Lopes</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Anibal de Freitas</span>
            </span>
        </div>
      <a href="editar-info.php?id=4" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="bárbara pereira">
        <div class="student-info">
            <span class="student-name">Bárbara Pereira</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Culto à Ciência</span>
            </span>
        </div>
       <a href="editar-info.php?id=5" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="pedro silva">
        <div class="student-info">
            <span class="student-name">Pedro Silva</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>La Salle São João</span>
            </span>
        </div>
       <a href="editar-info.php?id=6" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="yasmin souza">
        <div class="student-info">
            <span class="student-name">Yasmin Souza</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Anibal de Freitas</span>
            </span>
        </div>
       <a href="editar-info.php?id=7" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>

    <div class="student-item" data-name="gabriel silveira">
        <div class="student-info">
            <span class="student-name">Gabriel Silveira</span>
            <span class="student-school">
                <i class="bi bi-buildings"></i>
                <span>Culto à Ciência</span>
            </span>
        </div>
        <a href="editar-info.php?id=8" class="chevron-button"><i class="bi bi-chevron-right"></i></a>
    </div>
</div>

         <div class="no-results" id="noResults">
            <div>Nenhum estudante encontrado com esse nome.</div>
            <button class="btn-add" onclick="addNewStudent()">
                <i class="bi bi-plus-circle"></i> Adicionar Estudante
            </button>
        </div>
        
        <div class="action-buttons">
            <a href="javascript:history.back()" class="btn btn-secondary">Voltar</a>
        </div>
    </div>

    <script>
        function filterStudents() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const studentsList = document.getElementById('studentsList');
            const students = studentsList.getElementsByClassName('student-item');
            const noResults = document.getElementById('noResults');
            
            let hasResults = false;
            
            for (let i = 0; i < students.length; i++) {
                const studentName = students[i].getAttribute('data-name');
                if (studentName.includes(filter)) {
                    students[i].style.display = "flex";
                    hasResults = true;
                } else {
                    students[i].style.display = "none";
                }
            }
            
            // Mostra ou esconde a mensagem e botão de adicionar
            if (hasResults || filter === '') {
                noResults.style.display = "none";
            } else {
                noResults.style.display = "flex";
            }
        }
        
        function addNewStudent() {
            const searchInput = document.getElementById('searchInput');
            const studentName = searchInput.value.trim();
            
            if (studentName) {
                alert(`Estudante "${studentName}" será adicionado ao sistema!`);
                // Aqui você pode adicionar a lógica para realmente adicionar o estudante
                // Por exemplo: abrir um modal de cadastro ou enviar para o servidor
            } else {
                alert("Digite o nome do estudante para adicionar!");
            }
        }
    </script>
</body>
</html>