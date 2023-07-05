<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/models/gato.php";

$id_gato = $_GET['id'];

try {
    $gato = new Gato($id_gato);
    $gato->deletar();

    header('Location: /desafio_2/index.php');
}catch(PDOException $e){
    echo $e->getMessage();
}