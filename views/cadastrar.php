<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/templates/cabecalho.php";
?>

<section class="centro">
    <form action="/desafio_2/controllers/inserir_controller.php" method="post" enctype="multipart/form-data">
        <img src="/desafio_2/imgs/cat.svg" alt="" width="100rem">
        <div class="form-item">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>

        <div class="form-item">
            <label for="foto">Foto</label>
            <input type="file" name="foto" id="foto">
        </div>

        <div class="form-item">
            <label for="descricao">Descricao</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        </div>

        <div class="form-item">
            <button type="submit" class="btn-sucesso">Enviar</button>
        </div>
    </form>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/desafio_2/templates/cabecalho.php";
?>