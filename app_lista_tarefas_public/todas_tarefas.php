<?php
    $acao = 'recuperar';
    require 'tarefa_controller.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <met??e>App Lista Tarefas</title>

    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <script>

        function editar(id, textoTarefa){

            // Criar formulário
            let form = document.createElement('form')
            form.action = 'tarefa_controller.php?acao=atualizar'
            form.method = 'post'

            // Input hidden com o id
            let inputId = document.createElement('input')
            inputId.type = 'hidden'
            inputId.name = 'id'
            inputId.value = id

            // Input da tarefa
            let inputTarefa = document.createElement('input')
            inputTarefa.type = 'text'
            inputTarefa.name = 'tarefa'
            inputTarefa.className = 'form-control'
            inputTarefa.value = textoTarefa
		

            // Botão
            let button = document.createElement('button')
            button.type = 'submit'
            button.className = 'btn btn-info'
            button.innerHTML = 'Atualizar'

            // Adicionar elementos ao formulário
            form.appendChild(inputId)
            form.appendChild(inputTarefa)
            form.appendChild(button)

            // Selecionar a div da tarefa
            let tarefa = document.getElementById('tarefa_' + id)

            // Limpar conteúdo
            tarefa.innerHTML = ''

            // Inserir formulário
            tarefa.appendChild(form)
        }


		function remover(id) {
			location.href = 'todas_tarefas.php?acao=remover&id='+id;
		}

		function marcarRealizada(id){
			location.href = 'todas_tarefas.php?acao=marcarRealizada&id='+id;
		}

    </script>

</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" width="30" height="30">
                App Lista Tarefas
            </a>
        </div>
    </nav>

    <div class="container app">
        <div class="row">

            <div class="col-sm-3 menu">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="index.php">Tarefas pendentes</a>
                    </li>

                    <li class="list-group-item">
                        <a href="nova_tarefa.php">Nova tarefa</a>
                    </li>

                    <li class="list-group-item active">
                        <a href="#">Todas tarefas</a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-9">

                <div class="container pagina">

                    <div class="row">
                        <div class="col">

                            <h4>Todas tarefas</h4>
                            <hr>

                            <?php foreach($tarefas as $tarefa){ ?>

                                <div class="row mb-3 d-flex align-items-center tarefa"
                                     id="tarefa_<?= $tarefa->id ?>">

                                    <div class="col-sm-9">
                                        <?= $tarefa->tarefa ?>
                                        (<?= $tarefa->status ?>)
                                    </div>

                                    <div class="col-sm-3 mt-2 d-flex justify-content-between">

                                        <i class="fas fa-trash-alt fa-lg text-danger"
											onclick="remover(<?= $tarefa->id ?>)">
										</i>
										<?php if ($tarefa->status == 'pendente'){	?>
											<i class="fas fa-edit fa-lg text-info"
											onclick="editar(<?= $tarefa->id ?>, <?= htmlspecialchars(json_encode($tarefa->tarefa), ENT_QUOTES, 'UTF-8') ?>)">
											</i>

											<i class="fas fa-check-square fa-lg text-success"
												onclick="marcarRealizada(<?= $tarefa->id ?>)">
											</i>
										<?php	}	?>
                                    </div>

                                </div>

                            <?php } ?>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

</body>
</html>