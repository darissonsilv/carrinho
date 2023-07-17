<!DOCTYPE html>
<html>
<head>
    <title><?php echo FOFO CAR; ?> - Finalizar Compra</title>
</head>
<body>
    <h1>Finalizar Compra</h1>
    <?php if (empty($cartItems)): ?>
        <p>Carrinho vazio</p>
    <?php else: ?>
        <h2>Itens no Carrinho:</h2>
        <?php foreach ($cartItems as $item): ?>
            <div>
                <h3><?php echo $item['item_name']; ?></h3>
                <!-- Outras informações do item -->
                <p>Quantidade: <?php echo $item['quantity']; ?></p>
            </div>
        <?php endforeach; ?>
        <h2>Informações do Usuário:</h2>
        <form action="place_order.php" method="post">
            <!-- Campos do formulário para coletar informações do usuário, como nome, endereço, etc. -->
            <input type="submit" value="Confirmar Pedido">
        </form>
    <?php endif; ?>
</body>
</html>
