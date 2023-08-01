

<?php
require_once '../db/conexao.php';

class Carrinho
{
    private $id;
    private $id_usuario;
    private $id_produto;
    private $valor;
    private $data;

    // Construtor
    public function __construct($id_usuario, $id_produto, $valor)
    {
        $this->id_usuario = $id_usuario;
        $this->id_produto = $id_produto;
        $this->valor = $valor;
        $this->data = date('Y-m-d'); // Define a data atual para o carrinho
    }

    // Métodos Getters e Setters, se necessário.

    // Adicionar item ao carrinho no banco de dados
    public function adicionarAoCarrinho()
    {
        global $pdo;
        $sql = "INSERT INTO carrinho (id_usuario, id_produto, valor, data) VALUES (:id_usuario, :id_produto, :valor, :data)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $this->id_usuario);
        $stmt->bindParam(':id_produto', $this->id_produto);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':data', $this->data);
        $stmt->execute();
    }

    // Remover item do carrinho no banco de dados
    public static function removerDoCarrinho($id)
    {
        global $pdo;
        $sql = "DELETE FROM carrinho WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Obter todos os itens do carrinho para um usuário específico
    public static function obterItensDoCarrinhoPorUsuario($id_usuario)
    {
        global $pdo;
        $sql = "SELECT * FROM carrinho WHERE id_usuario = :id_usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Limpar o carrinho para um usuário específico
    public static function limparCarrinhoPorUsuario($id_usuario)
    {
        global $pdo;
        $sql = "DELETE FROM carrinho WHERE id_usuario = :id_usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();
    }
}
?>
