<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/templates/cabecalho.php";

$id_gato = $_GET['id'];

try {
    $gato = new Gato($id_gato);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>

<section class="centro">
    <form action="/desafio_2/controllers/editar_controller.php" method="post" enctype="multipart/form-data">
        <img src="/desafio_2/imgs/cat.svg" alt="" width="100rem">

        <input type="hidden" name="id_gato" id="id_gato" value="<?= $gato->id_gato ?>">

        <div class="form-item">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?= $gato->nome ?>">
        </div>

        <div class="form-item">
            <label for="descricao">Descricao</label>
            <textarea name="descricao" id="descriacao" cols="30" rows="10">
            <?= $gato->descricao ?>
            </textarea>
        </div>

        <div class="form-item">
            <button type="submit" class="btn-sucesso">Atualizar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/templates/rodape.php";
?>