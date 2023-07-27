<?php include 'templates/header.php'; ?>

<h1>Produtos Disponíveis</h1>
<!-- Lista de produtos -->



<!DOCTYPE html>
<html>
<head>
    <title><?php echo FOFO CAR; ?> - Produtos</title>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <?php foreach ($products as $product): ?>
        <div>
            <h2><?php echo $product['product_name']; ?></h2>
            <p>Preço: R$ <?php echo number_format($product['price'], 2, ',', '.'); ?></p>
            <!-- Outras informações do produto -->
            <form action="add_to_cart.php" method="post">
                <input type="hidden" name="item_id" value="<?php echo $product['product_id']; ?>">
                <input type="hidden" name="item_name" value="<?php echo $product['product_name']; ?>">
                <!-- Outras informações do item -->
                <input type="submit" value="Adicionar ao Carrinho">
            </form>
        </div>
    <?php endforeach; ?>
</body>
</html>



<?php include 'templates/footer.php'; ?>
