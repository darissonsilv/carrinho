<?php include 'templates/header.php'; ?>

<h1>Faça login</h1>
<!-- Formulário de login -->




<!DOCTYPE html>
<html>
<head>
    <title><?php echo FOFO CAR ; ?> - Login</title>
</head>
<body>
    <h1>Faça login</h1>
    <form action="login_process.php" method="post">
        <label for="username">Usuário:</label>
        <input type="text" name="username" required><br>
        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>

<?php include 'templates/footer.php'; ?>