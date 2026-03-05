<?php
include '../config/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $cnpj = $_POST['cnpj'] ?? '';
    $nome_fantasia = $_POST['nome_fantasia'] ?? '';
    $razao_social = $_POST['razao_social'] ?? '';
    $inscricao_estadual = $_POST['inscricao_estadual'] ?? '';
    $icms = $_POST['icms'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $situacao = $_POST['situacao'] ?? '';
    $email = $_POST['email'] ?? '';
    $endereco = $_POST['endereco'] ?? '';
    $numero = $_POST['numero'] ?? '';
    $complemento = $_POST['complemento'] ?? '';
    $bairro = $_POST['bairro'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $pais = $_POST['pais'] ?? '';
    $estado = $_POST['estado'] ?? '';

    // pegar o tipo de fornecedor (checkbox)
    $tipo_fornecedor = $_POST['tipo_fornecedor'] ?? '';

    $sql = "INSERT INTO fornecedores 
    (cnpj, nome_fantasia, razao_social, inscricao_estadual, icms, telefone, situacao, email, endereco, numero, complemento, bairro, cep, pais, estado, tipo_fornecedor)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssssssssssssss",
        $cnpj,
        $nome_fantasia,
        $razao_social,
        $inscricao_estadual,
        $icms,
        $telefone,
        $situacao,
        $email,
        $endereco,
        $numero,
        $complemento,
        $bairro,
        $cep,
        $pais,
        $estado,
        $tipo_fornecedor
    );

    if ($stmt->execute()) {
        echo "Fornecedor cadastrado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }
}
?>