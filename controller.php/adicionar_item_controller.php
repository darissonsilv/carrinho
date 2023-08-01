

<?php
require_once '../config/config.php';

// Recebe o ID do produto a ser adicionado ao carrinho
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_id = $_POST['produto_id'];

    // Verifica se o cookie carrinho já existe
    if (!isset($_COOKIE['carrinho'])) {
        $carrinho = array();
    } else {
        // Se já existir, obtém o carrinho atual do cookie
        $carrinho = json_decode($_COOKIE['carrinho'], true);
    }

    // Adiciona o produto ao carrinho
    $carrinho[$produto_id] = true;

    // Salva o carrinho atualizado no cookie
    setcookie('carrinho', json_encode($carrinho), time() + (86400 * 30), '/'); // Cookie válido por 30 dias

    // Redireciona para a página de carrinho
    header('Location: /views/carrinho.php');
    exit;
}
?>
