<?php

// Dados do banco
$host = "localhost";       
$user = "root";            
$pass = "";                
$db   = "fornecedores_db"; 

// Criar conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


?>