<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21179020_admin"; // usuário do MySQL
$pass = "w140885W@"; // senha do MySQL
$dbname = "id21179020_zombiegame"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
