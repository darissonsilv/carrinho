<?php


// Configurações de conexão com o banco de dados
$host = "localhost"; // Endereço do servidor MySQL
$usuario = "root"; // Nome do usuário do banco de dados
$senha = ""; // Senha do usuário do banco de dados
$database = "loja"; // Nome do banco de dados

// Cria a conexão com o banco de dados usando a extensão MySQLi
$conn = new mysqli($host, $usuario, $senha, $database);

// Verifica se houve erro na conexão
if ($mysqli->error) {
    die("Erro na conexão: " . $mysqli->error);
}






/* class conexão{
    public static function conectar (){
        $conn = new PDO(BD_DRIVE . "host =" . NOME_SERVIDOR . ";dbname=" NOME_BANCO,USUARIO,SENHA);
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERROMODE_EXCEPTION); 
       return $conn  }
} */
?>
