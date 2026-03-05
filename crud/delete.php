<?php

include '../config/conexao.php';

// Buscar o ID
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if ($id) {

    $sql = "DELETE FROM fornecedores WHERE id = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        //DEMONSTRAR SE TIVER ERRO
        header("Location: ../pages/listaFornecedores.php?msg=sucesso");
        exit;
    } else {
        echo "Erro ao excluir do banco de dados: " . $conn->error;
    }
} else {
    echo "ID inválido ou não fornecido.";
}
