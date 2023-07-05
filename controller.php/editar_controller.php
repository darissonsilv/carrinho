<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/models/gato.php";

$id_gato = $_POST['id_gato'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

try {
    $gato = new Gato($id_gato);
    $gato->nome = $nome;
    $gato->descricao = $descricao;
    $gato->editar();

    header('Location: /desafio_2/index.php');
}catch(PDOException $e){
    echo $e->getMessage();
}