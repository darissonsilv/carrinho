<!-- admin/cadastra_produto.php -->

<?php
// Aqui você deve verificar a sessão para garantir que o usuário tem permissão de administrador.
// Se não tiver, redirecione-o para a página de login ou exiba uma mensagem de erro.

// Exemplo básico: Verifica se o usuário está logado como administrador
session_start();
if (!isset($_SESSION['usuario_id']) || !$_SESSION['usuario_admin']) {
    header('Location: /views/login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Produto</title>
    <!-- Adicione os links para CSS, JavaScript, etc. -->
</head>
<body>
    <!-- Formulário para cadastrar o produto -->
    <form action="/controller/criar_produto_controller.php" method="POST">
        <!-- Campos do formulário (nome, valor, etc.) -->
        <!-- ... -->
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
