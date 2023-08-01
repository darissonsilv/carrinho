

<?php
require_once '../config/config.php';
require_once '../models/produto.php';

// Recebe o ID do produto a ser excluído
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];

    // Realize aqui a validação do ID do produto, se necessário.

    // Exclui o produto do banco de dados
    Produto::excluir($produto_id); // Método para excluir o produto do banco

    // Redireciona para a página de listagem de produtos
    header('Location: /views/admin/listar_produto.php');
    exit;
}
?>
