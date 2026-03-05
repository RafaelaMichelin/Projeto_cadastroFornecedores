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
            <form id="form-cad" class="form-cad-fornecedores" novalidate action="../crud/create.php" method="POST">

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
                            <input type="text" id="nome_fantasia" name="nome_fantasia" class="form-control" placeholder="Nome Fantasia" readonly placeholder="Nome Fantasia">
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
                            <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" readonly placeholder="Endereco">
                        </div>
                        <div class="form-group">
                            <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Complemento" readonly placeholder="Complemento">
                        </div>
                        <br>
                        <div class="form-group">
                            <select id="pais" name="pais" class="form-control" readonly placeholder="Pais">
                                <option value="Brazil" selected>Brasil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" id="cep" name="cep" class="form-control" placeholder="CEP" readonly placeholder="CEP">
                        </div>
                    </div>

                    <!-- Coluna Fornecedor -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="tipo" class="form-control text-center" value="Fornecedor" readonly>
                        </div>
                        <div class="form-group">
                            <input type="text" id="razao_social" name="razao_social" class="form-control" placeholder="Razão Social" readonly placeholder="Razão Social">
                        </div>
                        <div class="form-group">
                            <input type="text" id="inscricao_estadual" name="inscricao_estadual" class="form-control" placeholder="Inscrição Estadual / Isento" readonly placeholder="Inscrição Estadual / Isento">
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
                            <input type="text" id="numero" name="numero" class="form-control" placeholder="Numero" readonly placeholder="Numero">
                        </div>
                        <div class="form-group">
                            <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro" readonly placeholder="Bairro">
                        </div>
                        <br>
                        <div class="form-group">
                            <select id="Estado" name="estado" class="form-control" readonly placeholder="Estado">
                                <option value="Municipio" selected>Estado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" id="municipio" name="municipio" class="form-control" placeholder="Município" readonly placeholder="Municipio">
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
                                    <input type="checkbox" id="servicos" name="tipo_fornecedor" value="Serviços"> Serviços
                                </label>
                                <label for="example-checkbox1" style="padding: 10px;" class="help-block">
                                    <input type="checkbox" id="materiais" name="tipo_fornecedor" value="Materiais"> Materiais
                                </label>
                                <label for="example-checkbox1" style="padding: 10px;" class="help-block">
                                    <input type="checkbox" id="locacao" name="tipo_fornecedor" value="Locação"> Locação
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>



    <!-- Jquery para habilitar campos ao digitar o CNPJ e VALIDAÇÃO DOS CAMPOS-->
    <script>
        $(document).ready(function() {

            // --- 1. CONFIGURAÇÃO DE MÁSCARAS ---
            $('#cnpj, #login_cnpj').mask('00.000.000/0000-00');
            $('#cep').mask('00000-000');

            // Máscara dinâmica para telefone (9 ou 8 dígitos)
            var behavior = function(val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                options = {
                    onKeyPress: function(val, e, field, options) {
                        field.mask(behavior.apply({}, arguments), options);
                    }
                };
            $('#telefone').mask(behavior, options);


            // --- 2. LÓGICA DE DESBLOQUEIO DE CAMPOS---
            $('#cnpj').on('input', function() {
                let valor = $(this).val().replace(/\D/g, ''); // Remove pontos e traços
                if (valor.length === 14) { // Só desbloqueia quando o CNPJ estiver completo
                    $('#form-cad input, #form-cad select').prop('readonly', false).prop('disabled', false);
                }
            });


            // --- 3. VALIDAÇÃO DO FORMULÁRIO ---
            $("#form-cad").validate({
                rules: {
                    cnpj: {
                        required: true,
                        minlength: 18
                    },
                    nome_fantasia: "required",
                    razao_social: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    telefone: "required",
                    cep: "required",
                    login_senha: {
                        required: true,
                        minlength: 6
                    },
                    login_repetir_senha: {
                        required: true,
                        equalTo: "#login_senha" // Garante que as senhas sejam iguais
                    }
                },
                messages: {
                    cnpj: "Informe um CNPJ válido",
                    nome_fantasia: "O nome fantasia é obrigatório",
                    razao_social: "A razão social é obrigatória",
                    email: "Insira um e-mail válido",
                    login_senha: {
                        required: "Digite uma senha",
                        minlength: "A senha deve ter pelo menos 6 caracteres"
                    },
                    login_repetir_senha: "As senhas não conferem"
                },
                errorElement: "em",
                errorPlacement: function(error, element) {
                    error.addClass("help-block");
                    element.parents(".form-group").addClass("has-error");
                    error.insertAfter(element);
                },
                success: function(label, element) {
                    $(element).parents(".form-group").removeClass("has-error").addClass("has-success");
                }
            });
        });
    </script>

</body>

</html>