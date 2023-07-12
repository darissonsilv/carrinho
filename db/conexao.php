<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/carrinho/configs/config.php';


// Configurações de conexão com o banco de dados
$host = 'localhost';
$db_name = 'loja';
$username = 'seu_usuario';
$password = 'sua_senha';

try {
    // Criação da conexão PDO
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

    // Configuração do modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Definição do conjunto de caracteres para utf8 (opcional)
    $conn->exec("SET NAMES utf8");
} catch (PDOException $e) {
    // Em caso de erro na conexão, exibe a mensagem de erro
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
    exit();
}

?>
