<?php
// Task 2.3
$products = [
    ["name" => "T-shirt", "price" => 20],
    ["name" => "Shoes", "price" => 50],
    ["name" => "Hat", "price" => 15]
];
// Task 2.4
?>
<h1>Our Products</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li><?php echo $product["name"]; ?> – <?php echo $product["price"]; ?> €</li>
    <?php endforeach; ?>
</ul>