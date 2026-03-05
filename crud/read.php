<?php

include '../config/conexao.php';

//REALIZAR BUSCA NO SQLI
$sql = "SELECT * FROM fornecedores ORDER BY id ASC";
$result = $conn->query($sql);

$fornecedores = [];

if ($result && $result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $fornecedores[] = $row;
    }
}
?>