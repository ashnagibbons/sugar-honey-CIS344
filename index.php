<?php require 'header.php'; ?>

<?php
// Sample products. Each product is an array with a name, price, emoji "picture", and description.
$products = [
    ['name' => 'Strawberry Cupcake',   'price' => 3.50,  'emoji' => '🧁', 'description' => 'Vanilla cake topped with fresh strawberry buttercream.'],
    ['name' => 'Honey Croissant',      'price' => 4.00,  'emoji' => '🥐', 'description' => 'Flaky, buttery croissant brushed with local honey.'],
    ['name' => 'Chocolate Chip Cookie','price' => 2.25,  'emoji' => '🍪', 'description' => 'Soft and chewy, baked fresh every morning.'],
    ['name' => 'Pink Velvet Cake',     'price' => 28.00, 'emoji' => '🎂', 'description' => 'A whole cake with cream cheese frosting. Serves 8.'],
    ['name' => 'Glazed Donut',         'price' => 2.00,  'emoji' => '🍩', 'description' => 'Classic yeast donut with a sweet pink glaze.'],
    ['name' => 'Cherry Pie Slice',     'price' => 4.50,  'emoji' => '🥧', 'description' => 'Golden crust filled with tart cherries.'],
];
?>

<section class="hero">
    <h1>Welcome to Sugar &amp; Honey</h1>
    <p>Fresh-baked treats made with love every morning.</p>
</section>

<section>
    <h2>Our Products</h2>

    <div class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product-card">
                <div class="product-image"><?= $product['emoji'] ?></div>
                <h3><?= htmlspecialchars($product['name']) ?></h3>
                <p><?= htmlspecialchars($product['description']) ?></p>
                <p class="price">$<?= number_format($product['price'], 2) ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require 'footer.php'; ?>