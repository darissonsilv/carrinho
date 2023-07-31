<?php 

require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/templates/cabecalho.php';
?>
<link rel="stylesheet" href="/carrinho/css/style.css">

<form class="form-cadastro">
    <p class="title">Cadastro</p>
    <p class="message">Faça seu cadastro na Fofo veículos. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Nome</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Sobrenome</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input">
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input">
        <span>Senha</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input">
        <span>Confirmação da senha</span>
    </label>
    <button class="submit" >inscreva</button>
    <p class="signin">Já tem uma conta? <a href="/carrinho/views/login.php">login</a> </p>
</form>

<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/templates/rodape.php';
?>