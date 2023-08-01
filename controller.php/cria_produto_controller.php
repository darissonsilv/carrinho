

<?php
require_once '../config/config.php';
require_once '../models/produto.php';

// Recebe os dados do formulário de criação de produto
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $valor = $_POST['valor'];

    // Realize aqui a validação dos dados recebidos, se necessário.

    // Cria o produto no banco de dados
    $produto = new Produto($nome, $valor);
    $produto->salvar(); // Método para salvar o produto no banco

    // Redireciona para a página de listagem de produtos
    header('Location: /views/admin/listar_produto.php');
    exit;
}
?>
