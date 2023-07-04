<?php

$servername = "localhost"; // nome do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "bd_login"; // nome do banco de dados

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>