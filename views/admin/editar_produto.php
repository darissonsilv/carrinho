<!-- admin/editar_produto.php -->

<?php
// Aqui você deve verificar a sessão para garantir que o usuário tem permissão de administrador.
// Se não tiver, redirecione-o para a página de login ou exiba uma mensagem de erro.

// Exemplo básico: Verifica se o usuário está logado como administrador
session_start();
if (!isset($_SESSION['usuario_id']) || !$_SESSION['usuario_admin']) {
    header('Location: /views/login.php');
    exit;
}

// Verifica se foi fornecido o ID do produto a ser editado
if (!isset($_GET['id'])) {
    header('Location: /views/admin/listar_produto.php');
    exit;
}

// Aqui você pode obter os dados do produto pelo ID para preencher o formulário de edição
// ...
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Produto</title>
    <!-- Adicione os links para CSS, JavaScript, etc. -->
</head>
<body>
    <!-- Formulário para editar o produto -->
    <form action="/controller/editar_produto_controller.php" method="POST">
        <!-- Campos do formulário (nome, valor, etc.) preenchidos com os dados do produto -->
        <!-- ... -->
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>
