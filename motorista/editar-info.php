<?php
// Pega o ID da URL
$id = $_GET['id'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <title>Editar Informações do Estudante</title>
    <style>
        body { font-family: 'Roboto', Arial, sans-serif; background:#f5f5f5; margin:0; padding:20px; color:#333; }
        .container { max-width:800px; margin:0 auto; }
        .header { display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; }
        .page-title { font-size:24px; font-weight:500; }
        .back-button { color:#333; text-decoration:none; font-size:16px; display:flex; align-items:center; gap:5px; }
        .student-card { background:#fff; border-radius:8px; padding:20px; box-shadow:0 2px 4px rgba(0,0,0,0.1); margin-bottom:20px; }
        .student-header { display:flex; align-items:center; margin-bottom:15px; padding-bottom:15px; border-bottom:1px solid #eee; }
        .student-avatar { width:50px; height:50px; border-radius:50%; background:#e9ecef; display:flex; align-items:center; justify-content:center; margin-right:15px; font-size:20px; color:#495057; }
        .student-name { font-weight:500; font-size:18px; margin-bottom:5px; }
        .student-school { font-size:14px; color:#666; display:flex; align-items:center; }
        .form-group { margin-bottom:20px; }
        .form-label { display:block; margin-bottom:8px; font-weight:500; }
        .form-control { width:100%; padding:10px; border:1px solid #ddd; border-radius:4px; font-size:16px; }
        .time-inputs { display:flex; gap:15px; margin-top:10px; }
        .time-group { flex:1; }
        .action-buttons { display:flex; flex-wrap:wrap; gap:10px; margin-top:30px; }
        .btn { padding:12px 24px; border-radius:4px; font-size:16px; cursor:pointer; transition:all 0.3s; border:none; }
        .btn-primary { background:#dc3545; color:white; }
        .btn-primary:hover { background:#bb2d3b; }
        .btn-secondary { background:#6c757d; color:white; }
        .btn-secondary:hover { background:#5a6268; }
        .btn-outline { background:white; color:#333; border:1px solid #ddd; }
        .btn-outline:hover { background:#f8f9fa; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="page-title">Editar Informações</h1>
            <a href="students-list.php" class="back-button">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>

        <div class="student-card">
            <div class="student-header">
                <div class="student-avatar">
                    <i class="bi bi-person"></i>
                </div>
                <div class="student-info">
                    <div id="student-name" class="student-name"></div>
                    <div id="school-name" class="student-school"></div>
                </div>
            </div>

            <form>
                <div class="form-group">
                    <label class="form-label">Endereço de Embarque</label>
                    <input type="text" id="pickup" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label">Endereço de Desembarque</label>
                    <input type="text" id="dropoff" class="form-control">
                </div>

                <div class="form-group">
                    <label class="form-label">Horário Aproximado</label>
                    <div class="time-inputs">
                        <div class="time-group">
                            <label class="form-label">Chegada</label>
                            <input type="time" id="arrival" class="form-control">
                        </div>
                        <div class="time-group">
                            <label class="form-label">Saída</label>
                            <input type="time" id="departure" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Observações</label>
                    <textarea id="notes" class="form-control" rows="3"></textarea>
                </div>

                <div class="action-buttons">
                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    <button type="button" class="btn btn-outline" onclick="history.back()">Cancelar</button>
                    <button type="button" class="btn btn-secondary">Excluir Rota</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const students = [
            { id: 1, name: "Aline Ramos", school: "Anibal de Freitas", pickup: "Rua das Flores, 123 - Jardim Primavera", dropoff: "Anibal de Freitas - Rua Principal, 456", arrival: "07:30", departure: "13:45", notes: "Aline precisa de assistência especial para desembarque" },
            { id: 2, name: "Caio Luccas", school: "Pastor Dom Bosco", pickup: "Avenida Central, 789 - Centro", dropoff: "Pastor Dom Bosco - Rua Escolar, 101", arrival: "07:15", departure: "12:30", notes: "Caio tem aula de reforço às terças e quintas" },
            { id: 3, name: "Tomas Silva", school: "Culto à Ciência", pickup: "Travessa das Acácias, 55 - Vila Nova", dropoff: "Culto à Ciência - Rua da Ciência, 202", arrival: "07:45", departure: "13:15", notes: "" },
            { id: 4, name: "Yuri Lopes", school: "Anibal de Freitas", pickup: "Rua dos Pinheiros, 33 - Bosque Verde", dropoff: "Anibal de Freitas - Rua Principal, 456", arrival: "07:20", departure: "13:50", notes: "Yuri precisa ser o primeiro a ser pego na rota" },
            { id: 5, name: "Bárbara Pereira", school: "Culto à Ciência", pickup: "Alameda dos Jacarandás, 77 - Jardim Flores", dropoff: "Culto à Ciência - Rua da Ciência, 202", arrival: "07:35", departure: "13:20", notes: "Bárbara tem alergia a amendoim" },
            { id: 6, name: "Pedro Silva", school: "La Salle São João", pickup: "Rua das Orquídeas, 12 - Parque das Árvores", dropoff: "La Salle São João - Avenida Educacional, 303", arrival: "07:10", departure: "12:45", notes: "" },
            { id: 7, name: "Yasmin Souza", school: "Anibal de Freitas", pickup: "Rua dos Lírios, 45 - Vila Jardim", dropoff: "Anibal de Freitas - Rua Principal, 456", arrival: "07:25", departure: "13:40", notes: "Yasmin precisa de cadeira especial no transporte" },
            { id: 8, name: "Gabriel Silveira", school: "Culto à Ciência", pickup: "Avenida das Palmeiras, 89 - Centro", dropoff: "Culto à Ciência - Rua da Ciência, 202", arrival: "07:50", departure: "13:10", notes: "Gabriel tem autorização para sair sozinho" }
        ];

        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const studentId = parseInt(urlParams.get('id'));

            const student = students.find(s => s.id === studentId);
            if (!student) return;

            // Preenche os campos
            document.getElementById('student-name').textContent = student.name;
            document.getElementById('school-name').textContent = student.school;
            document.getElementById('pickup').value = student.pickup;
            document.getElementById('dropoff').value = student.dropoff;
            document.getElementById('arrival').value = student.arrival;
            document.getElementById('departure').value = student.departure;
            document.getElementById('notes').value = student.notes;
        };
    </script>
</body>
</html>
