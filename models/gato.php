<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/db/conexao.php";

class Gato{
    public $id_gato;
    public $nome;
    public $foto;
    public $descricao;

    public function __construct($id_gato = false)
    {
        if ($id_gato) {
            $this->id_gato = $id_gato;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT nome, foto, descricao FROM gato WHERE id_gato = :id_gato";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_gato', $this->id_gato);
        $stmt->execute();

        $lista = $stmt->fetch();
        $this->nome = $lista['nome'];
        $this->foto = $lista['foto'];
        $this->descricao = $lista['descricao'];
    }

    public function criar()
    {
        $query = "INSERT INTO gato (nome, foto, descricao) VALUES (:nome, :foto, :descricao)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':foto', $this->foto);
        $stmt->bindValue(':descricao', $this->descricao);
        $stmt->execute();
        $id_gato = $conexao->lastInsertId();
        return $id_gato;
    }

    public static function listar()
    {
        $sql = "SELECT * FROM gato";
        $conexao = Conexao::conectar();
        $resultado = $conexao->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE gato SET nome = :nome, descricao = :descricao WHERE id_gato = :id_gato";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":nome", $this->nome);
        $stmt->bindValue(":descricao", $this->descricao);
        $stmt->bindValue(":id_gato", $this->id_gato);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM gato WHERE id_gato = :id_gato";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_gato', $this->id_gato);
        $stmt->execute();
    }

}