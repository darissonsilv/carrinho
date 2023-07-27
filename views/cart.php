<!DOCTYPE html>
<html>
<head>
    <title><?php echo FOFO CAR; ?> - Carrinho de Compras</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>
    <?php if (empty($cartItems)): ?>
        <p>Carrinho vazio</p>
    <?php else: ?>
        <?php foreach ($cartItems as $item): ?>
            <div>
                <h2><?php echo $item['item_name']; ?></h2>
                <!-- Outras informações do item -->
                <p>Quantidade: <?php echo $item['quantity']; ?></p>
                <form action="update_cart.php" method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                    <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1">
                    <input type="submit" value="Atualizar">
                </form>
                <form action="remove_from_cart.php" method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']; ?>">
                    <input type="submit" value="Remover">
                </form>
            </div>
        <?php endforeach; ?>
        <form action="checkout.php" method="post">
            <input type="submit" value="Finalizar Compra">
        </form>
    <?php endif; ?>
</body>
</html>
