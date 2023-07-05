<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/models/gato.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
if (!empty($_FILES['foto']['tmp_name'])) {
    $imagem = file_get_contents($_FILES['foto']['tmp_name']);
}

try{
    $gato = new Gato();
    $gato->nome = $nome;
    $gato->descricao = $descricao;
    $gato->foto = $imagem;
    $gato->criar();

    header('Location: /desafio_2/index.php');
}catch(PDOException $e){
    echo $e->getMessage();
}