<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Todo App</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="">
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">Criar tarefa</a>
            </nav>

            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progresso do dia</h2>
                        <div class="graph-header-date">
                            <img src="/assets/images/icon-prev.png" alt="Voltar">
                            13 Dez
                            <img src="/assets/images/icon-next.png" alt="Avançar">
                        </div>
                    </div>
                    <div class="graph-header-subtitle">Tarefas: 3/6</div>

                    <div class="graph-placeholder"></div>

                    <div class="graph-header-task-left">
                        <img src="/assets/images/icon-info.png" alt="Info">
                        <label>Restam 3 tarefas para finalizar</label>
                    </div>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select class="list-header-select">
                            <option value="1">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="task-list">
                        <div class="task">
                            <div class="task-name">
                                <input type="checkbox" class="task-checkbox">
                                <span class="task-name-text">Tarefa 1</span>
                            </div>
                            <div class="task-priority">
                                <div class="task-priority-icon"></div>
                                <span class="task-priority-text">Alta</span>
                            </div>
                            <div class="task-actions">
                                <a href="#" class="task-actions-edit">
                                    <img src="/assets/images/icon-edit.png" alt="Editar">
                                </a>
                                <a href="#" class="task-actions-delete">
                                    <img src="/assets/images/icon-delete.png" alt="Excluir">
                                </a>
                            </div>
                        </div>
                        <div class="task">
                            <div class="task-name">
                                <input type="checkbox" class="task-checkbox">
                                <span class="task-name-text">Tarefa 1</span>
                            </div>
                            <div class="task-priority">
                                <div class="task-priority-icon"></div>
                                <span class="task-priority-text">Alta</span>
                            </div>
                            <div class="task-actions">
                                <a href="#" class="task-actions-edit">
                                    <img src="/assets/images/icon-edit.png" alt="Editar">
                                </a>
                                <a href="#" class="task-actions-delete">
                                    <img src="/assets/images/icon-delete.png" alt="Excluir">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
