<?php

$id = $_GET['id'] ?? 1;

$url = "http://pstore.amairia.com/api/products";

$json = file_get_contents($url);
$data = json_decode($json, true);

$product = null;

foreach ($data['data'] as $item) {
    if ($item['id'] == $id) {
        $product = $item;
        break;
    }
}

if (!$product) {
    echo "Product not found";
    exit;
}

?>

<h1><?php echo $product['name']; ?></h1>
<p>Price: <?php echo $product['price']; ?> €</p>
<p><?php echo $product['description'] ?? 'No description available.'; ?></p>

<a href="products.php"> < Back to products</a>