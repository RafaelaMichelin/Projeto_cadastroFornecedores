<?php
// conexão com banco de dados
include '../config/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    <style>
        #login-container {
            width: 960px;
            margin: 35px auto;
        }

        .form-group input {
            width: 100%;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <div id="login-container">

        <!-- Título -->
        <div class="login-titulo text-center">
            <h1><strong>Portal MSE</strong></h1>
        </div>

        <div class="block">
            <form id="form-cad" class="form-cad-fornecedores" novalidate>

                <div class="row">
                    <!-- Coluna Pessoa Jurídica -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="pessoa" class="form-control text-center" value="Pessoa Jurídica" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" id="cnpj" name="cnpj" class="form-control" placeholder="CNPJ">
                        </div>
                        <div class="form-group">
                            <input type="text" id="nome_fantasia" name="nome_fantasia" class="form-control" placeholder="Nome Fantasia" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <h5 class="help-block">ICMS:</h5>
                            <input type="text" id="icms" name="icms" class="form-control" placeholder="ICMS">
                        </div>
                        <div class="form-group">
                            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Complemento" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <select id="pais" name="pais" class="form-control" disabled>
                                <option value="Brazil" selected>Brasil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP" disabled>
                        </div>
                    </div>

                    <!-- Coluna Fornecedor -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="tipo" class="form-control text-center" value="Fornecedor" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" id="razao_social" name="razao_social" class="form-control" placeholder="Razão Social" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" id="ie" name="ie" class="form-control" placeholder="Inscrição Estadual / Isento" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <h5 class="help-block">Situação:</h5>
                            <input type="text" id="situacao" name="situacao" class="form-control" placeholder="Situação">
                        </div>
                        <div class="form-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" id="numero" name="numero" class="form-control" placeholder="Numero" disabled>
                        </div>
                        <div class="form-group">
                            <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <select id="municipio" name="municipio" class="form-control" disabled>
                                <option value="Municipio" selected>Municipio</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" id="cep" name="municipio" class="form-control" placeholder="municipio" disabled>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <div class="input-group" style="width: 100%" ;>
                            <h3 class="help-block">Fornecedor de: </h3>
                            <div style="display:flex; justify-content:center;">
                                <label for="example-checkbox1" style="padding: 10px;" class="help-block">
                                    <input type="checkbox" id="servicos" name="servicos" value="Serviços"> Serviços
                                </label>
                                <label for="example-checkbox1" style="padding: 10px;" class="help-block">
                                    <input type="checkbox" id="materiais" name="materiais" value="Materiais"> Materiais
                                </label>
                                <label for="example-checkbox1" style="padding: 10px;" class="help-block">
                                    <input type="checkbox" id="locacao" name="locacao" value="Locação"> Locação
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="row" style="margin-top: 40px;">

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="login_cnpj" name="login_cnpj" class="form-control" placeholder="CNPJ">
                    </div>
                    <div class="form-group">
                        <input type="password" id="login_senha" name="login_senha" class="form-control" placeholder="Senha">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" id="login_nome" name="login_nome" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="password" id="login_repetir_senha" name="login_repetir_senha" class="form-control" placeholder="Repetir Senha">
                    </div>
                </div>
            </div>
        </div>
    <div class="form-group" style="margin-top: 20px;">
    <button type="submit" class="btn btn-primary pull-right">Cadastrar</button>
</div>
</form>
<footer style="width: 100%; text-align: center; padding: 20px 0; margin-top: 50px; background-color: #f5f5f5; color: #555;">
    &copy; 2026 Portal MSE.
</footer>
    </div>



    <!-- jQuery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>