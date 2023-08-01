

<?php
// Configurações do banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'loja';

// Conexão com o banco de dados usando PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Outras configurações, se necessário.
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}




/* class conexão{
    public static function conectar (){
        $conn = new PDO(BD_DRIVE . "host =" . NOME_SERVIDOR . ";dbname=" NOME_BANCO,USUARIO,SENHA);
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERROMODE_EXCEPTION); 
       return $conn  }
} */
?>
