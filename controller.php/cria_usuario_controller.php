

<?php
require_once '../config/config.php';
require_once '../models/usuario.php';

// Recebe os dados do formulário de cadastro de usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nome = $_POST['nome'];

    // Realize aqui a validação dos dados recebidos, se necessário.

    // Cria o usuário no banco de dados
    $usuario = new Usuario($email, $senha, $nome);
    $usuario->salvar(); // Método para salvar o usuário no banco

    // Redireciona para a página de login
    header('Location: /views/login.php');
    exit;
}
?>
