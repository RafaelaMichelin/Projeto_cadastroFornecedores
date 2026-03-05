<?php
include '../crud/read.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Fornecedores - Portal MSE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        body {
            background-color: #f5f5f5;
        }

        #login-container {
            width: 960px;
            margin: 35px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-titulo h1 {
            margin-bottom: 30px;
            color: #333;
        }

        /* Estilo da Tabela */
        .table thead {
            background-color: #f9f9f9;
        }

        .table th {
            text-transform: uppercase;
            font-size: 12px;
            color: #777;
            letter-spacing: 1px;
            border-bottom: 2px solid #eee !important;
        }

        .table td {
            vertical-align: middle !important;
            padding: 12px 8px !important;
        }

        .btn-novo {
            margin-bottom: 20px;
        }

        footer {
            width: 100%;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
            color: #555;
        }
    </style>
</head>

<body>

    <div id="login-container">
        <div class="login-titulo text-center">
            <h1><strong>Portal MSE</strong></h1>
            <h4 class="help-block">Listagem de Fornecedores</h4>
        </div>

        <div class="row btn-novo">
            <div class="col-md-12">
                <a href="cadastro.php" class="btn btn-primary pull-right">
                    <span class="glyphicon glyphicon-plus"></span> Novo Fornecedor
                </a>
            </div>
        </div>

        <?php if (isset($_GET['msg'])): ?>
            <div class="alert alert-success">Operação realizada com sucesso!</div>
        <?php endif; ?>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Razão Social / CNPJ</th>
                        <th>Contato</th>
                        <th>Localização</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($fornecedores) > 0): ?>
                        <?php foreach ($fornecedores as $f): ?>
                            <tr>
                                <td><strong>#<?= $f['id'] ?></strong></td>
                                <td>
                                    <span style="color: #337ab7; font-weight: bold;"><?= $f['razao_social'] ?></span><br>
                                    <small class="text-muted"><?= $f['cnpj'] ?></small>
                                </td>
                                <td>
                                    <small><?= $f['email'] ?></small><br>
                                    <small><?= $f['telefone'] ?></small>
                                </td>
                                <td>
                                    <small><?= $f['municipio'] ?> - <?= $f['estado'] ?></small>
                                </td>
                                <td class="text-center">
                                    <a href="editar.php?id=<?= $f['id'] ?>" class="btn btn-default btn-sm" title="Editar">
                                        <span class="glyphicon glyphicon-pencil text-warning"></span>
                                    </a>
                                    <a href="javascript:void(0)" onclick="confirmarExclusao(<?= $f['id'] ?>)" class="btn btn-default btn-sm" title="Excluir">
                                        <span class="glyphicon glyphicon-trash text-danger"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center">Nenhum registro encontrado.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <footer>
            &copy; 2026 Portal MSE.
        </footer>
    </div>

    <script>
        function confirmarExclusao(id) {
            if (confirm("Tem certeza que deseja remover este fornecedor?")) {
                
                window.location.href = "../crud/delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>