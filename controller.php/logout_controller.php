

<?php
require_once '../config/config.php';

// Realize aqui a lógica para o logout do usuário, como limpar a sessão, etc.

// Exemplo simples de limpeza da sessão e redirecionamento para a página de login:
session_unset();
session_destroy();
header('Location: /views/login.php');
exit;
?>
