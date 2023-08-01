

<?php
require_once '../db/conexao.php';

class Produto
{
    private $id;
    private $capa;
    private $nome;
    private $valor;
    private $data;

    // Construtor
    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->data = date('Y-m-d'); // Define a data atual para o produto
    }

    // Métodos Getters e Setters, se necessário.

    // Salvar produto no banco de dados
    public function salvar()
    {
        global $pdo;
        $sql = "INSERT INTO produtos (capa, nome, valor, data) VALUES (:capa, :nome, :valor, :data)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':capa', $this->capa);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':data', $this->data);
        $stmt->execute();
    }

    // Buscar produto por ID
    public static function buscarPorId($id)
    {
        global $pdo;
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Buscar produtos por IDs
    public static function buscarPorIds($ids)
    {
        global $pdo;
        $placeholders = implode(',', array_fill(0, count($ids), '?'));
        $sql = "SELECT * FROM produtos WHERE id IN ($placeholders)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($ids);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Excluir produto por ID
    public static function excluir($id)
    {
        global $pdo;
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    // Atualizar produto no banco de dados
    public function atualizar()
    {
        global $pdo;
        $sql = "UPDATE produtos SET capa = :capa, nome = :nome, valor = :valor, data = :data WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':capa', $this->capa);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':valor', $this->valor);
        $stmt->bindParam(':data', $this->data);
        $stmt->execute();
    }
}
?>
