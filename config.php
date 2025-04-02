<?php
$servername = "localhost";  // Nome do servidor
$username = "root";         // Usuário do MySQL
$password = "";             // Senha do MySQL (deixe vazio se não tiver)
$dbname = "imobiliaria";    // Nome do banco de dados

// Criando a conexão com o MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
