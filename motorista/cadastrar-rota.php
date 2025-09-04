<?php
session_start();

// Dados de exemplo (substitua por conexão com banco de dados)
$rotas = [
    [
        'id' => '4318',
        'nome' => 'Rota da Manhã',
        'van' => 'Tia Be',
        'horario' => '06:00',
        'dias' => 'Seg, Ter, Qua, Qui, Sex',
        'tipo' => 'fixa',
        'turno' => 'manha'
    ],
    [
        'id' => '5078',
        'nome' => 'Rota da Tarde',
        'van' => 'Tia Be',
        'horario' => '12:00',
        'tipo' => 'van',
        'turno' => 'tarde'
    ]
];

// Verifica se não há rotas
$semRotas = empty($rotas);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Rotas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        .nav-menu {
            display: flex;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .nav-section {
            display: flex;
            align-items: center;
            margin-right: 30px;
        }
        
        .nav-section strong {
            margin-right: 10px;
        }
        
        .nav-link {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
        
        .nav-link:hover {
            color: #0066cc;
        }
        
        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin: 20px 0;
        }
        
        .rota-container {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .rota-title {
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
            margin-bottom: 15px;
        }
        
        .rota-info {
            list-style-type: none;
            padding: 0;
            margin: 0 0 15px 0;
        }
        
        .rota-info li {
            margin-bottom: 5px;
        }
        
        .rota-actions {
            display: flex;
            gap: 10px;
        }
        
        .btn {
            padding: 6px 12px;
            border-radius: 4px;
            border: 1px solid #ddd;
            background-color: #f8f9fa;
            cursor: pointer;
            font-size: 14px;
        }
        
        .btn-fixo {
            background-color: #e9ecef;
            font-weight: bold;
        }
        
        .btn-alerta {
            background-color: #fff3cd;
        }
        
        .sem-rotas {
            color: #666;
            font-style: italic;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Lista de Rotas</h1>
    
    <div class="nav-menu">
        <div class="nav-section">
            <strong>Todas</strong>
            <a href="?filtro=fixas" class="nav-link">Fixas</a>
            <a href="?filtro=vanuber" class="nav-link">VanUber</a>
        </div>
        
        <div class="nav-section">
            <strong>Turno</strong>
            <a href="?filtro=van" class="nav-link">Van</a>
            <a href="?filtro=ordenar" class="nav-link">Ordenar</a>
        </div>
    </div>
    
    <hr>
    
    <?php if ($semRotas): ?>
        <div class="sem-rotas">Você não cadastrou nenhuma rota.</div>
    <?php else: ?>
        <!-- Rota da Manhã -->
        <div class="rota-container">
            <h2 class="rota-title">Rota da Manhã</h2>
            <ul class="rota-info">
                <li>Id: 4318</li>
                <li>Van: Tia Be</li>
                <li>Horário: 06:00h</li>
                <li>Dias: Seg, Ter, Qua, Qui, Sex</li>
            </ul>
            <div class="rota-actions">
                <button class="btn btn-fixo">Fixo</button>
                <button class="btn btn-alerta">Enviar Alerta</button>
                <button class="btn btn-alerta">Enviar Alerta</button>
            </div>
        </div>
        
        <!-- Rota da Tarde -->
        <div class="rota-container">
            <h2 class="rota-title">Rota da Tarde</h2>
            <ul class="rota-info">
                <li>Id: 5078</li>
                <li>Van: Tia Be</li>
                <li>Horário: 12:00h</li>
            </ul>
            <div class="rota-actions">
                <button class="btn btn-alerta">Enviar Alerta</button>
            </div>
        </div>
    <?php endif; ?>
</body>
</html>