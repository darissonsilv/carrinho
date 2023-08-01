<?php
// Inclui o arquivo de conexão com o banco de dados
require_once $_SERVER["DOCUMENT_ROOT"] . '/carrinho/db/conexao.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (empty($_POST['email'])) {
        echo "Preencha seu email";
    } else if (empty($_POST['senha'])) {
        echo 'Preencha sua senha';
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // Consulta SQL para verificar o login no banco de dados
        $sql_code = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código SQL: ' . $mysqli->error);

        // Verifica se as credenciais estão corretas
        if ($sql_query->num_rows == 1) {
            // Autenticação bem-sucedida, redireciona para a página de perfil ou área restrita
            $row = $sql_query->fetch_assoc();
            session_start();
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];
            header("Location: /carrinho/index.php");
            exit;
        } else {
            // Credenciais inválidas, exibir mensagem de erro ou redirecionar para a página de login
            echo "Credenciais inválidas. Tente novamente.";
        }
    }
} else {
    echo "Preencha todos os campos corretamente.";
}

// Não esqueça de fechar a conexão após utilizá-la
$conn->close();
?>
