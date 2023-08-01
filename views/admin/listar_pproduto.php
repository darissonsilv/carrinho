<!-- admin/listar_produto.php -->

<?php
// Aqui você deve verificar a sessão para garantir que o usuário tem permissão de administrador.
// Se não tiver, redirecione-o para a página de login ou exiba uma mensagem de erro.

// Exemplo básico: Verifica se o usuário está logado como administrador
session_start();
if (!isset($_SESSION['usuario_id']) || !$_SESSION['usuario_admin']) {
    header('Location: /views/login.php');
    exit;
}

// Aqui você pode obter a lista de produtos do banco de dados para exibir na página
// ...
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Produtos</title>
    <!-- Adicione os links para CSS, JavaScript, etc. -->
</head>
<body>
    <!-- Exibe a lista de produtos -->
    <ul>
        <!-- Loop para exibir os produtos -->
        <!-- ... -->
        <li>Nome do Produto</li>
        <!-- ... -->
    </ul>
</body>
</html>
