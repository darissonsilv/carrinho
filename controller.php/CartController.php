<?php

class CartController {
    public function addToCart() {
        // Lógica para adicionar itens ao carrinho
        // ...

        // Redirecionar de volta à página de produtos após adicionar ao carrinho
        header("Location: products.php");
        exit();
    }

    public function viewCart() {
        // Lógica para exibir o carrinho de compras
        // ...

        // Renderizar a visualização do carrinho de compras
        include 'views/cart.php';
    }

    // Outros métodos do CartController, como remoção de itens do carrinho, atualização de quantidades, etc.
    // ...
}

?>
