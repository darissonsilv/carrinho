<!-- admin/painel.php -->

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
    <title>Painel de Administração</title>
    <!-- Adicione os links para CSS, JavaScript, etc. -->
</head>
<body>
    <h1>Bem-vindo ao Painel de Administração</h1>
    <ul>
        <li><a href="/admin/cadastra_produto.php">Cadastrar Produto</a></li>
        <li><a href="/admin/listar_produto.php">Listar Produtos</a></li>
        <!-- Adicione outros links para outras funcionalidades -->
    </ul>
</body>
</html>
