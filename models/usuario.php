

<?php
require_once '../db/conexao.php';

class Usuario
{
    private $id;
    private $email;
    private $senha;
    private $nome;

    // Construtor
    public function __construct($email, $senha, $nome)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }

    // Métodos Getters e Setters, se necessário.

    // Salvar usuário no banco de dados
    public function salvar()
    {
        global $pdo;
        $sql = "INSERT INTO usuarios (email, senha, nome) VALUES (:email, :senha, :nome)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->execute();
    }

    // Buscar usuário por email e senha
    public static function buscarPorEmailSenha($email, $senha)
    {
        global $pdo;
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
