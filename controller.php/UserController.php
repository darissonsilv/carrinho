<?php

class UserController {
    public function login() {
        // Lógica para lidar com o login do usuário
        // ...

        // Redirecionar para a página principal após o login
        header("Location: index.php");
        exit();
    }

    public function logout() {
        // Lógica para lidar com o logout do usuário
        // ...

        // Redirecionar para a página de login após o logout
        header("Location: login.php");
        exit();
    }

    // Outros métodos do UserController, como registro, perfil do usuário, etc.
    // ...
}

?>
