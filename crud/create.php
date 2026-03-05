<?php
include '../config/conexao.php';
//  MÉTODO POST PARA ENVIAR OS DADOS
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
    
    $municipio = $_POST['municipio'] ?? ''; 
    
    $bairro = $_POST['bairro'] ?? '';
    $cep = $_POST['cep'] ?? '';
    $pais = $_POST['pais'] ?? '';
    $estado = $_POST['estado'] ?? '';
    $tipo_fornecedor = $_POST['tipo_fornecedor'] ?? '';

   
    $sql = "INSERT INTO fornecedores 
    (cnpj, nome_fantasia, razao_social, inscricao_estadual, icms, telefone, situacao, email, endereco, numero, complemento, municipio, bairro, cep, pais, estado, tipo_fornecedor)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
//CONTAGEM DE CAMPOS PARA NÃO SE PERDER
    $stmt->bind_param("sssssssssssssssss",
        $cnpj,               // 1
        $nome_fantasia,      // 2
        $razao_social,       // 3
        $inscricao_estadual, // 4
        $icms,               // 5
        $telefone,           // 6
        $situacao,           // 7
        $email,              // 8
        $endereco,           // 9
        $numero,             // 10
        $complemento,        // 11
        $municipio,          // 12 
        $bairro,             // 13
        $cep,                // 14
        $pais,               // 15
        $estado,             // 16
        $tipo_fornecedor     // 17
    );

    if ($stmt->execute()) {
        header("Location: ../pages/listaFornecedores.php?msg=sucesso");
        exit;
    } else {
        echo "Erro: " . $stmt->error;
    }
}
?>