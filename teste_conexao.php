<?php

include 'config/conexao.php';

// Teste simples
if ($conn) {
    echo "Conexão com o banco de dados realizada com sucesso!";
} else {
    echo "Falha na conexão.";
}
?>