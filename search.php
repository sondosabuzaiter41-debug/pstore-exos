<?php
$results = [];
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $search = urlencode($_GET['q']);
    $url = "https://pstore.amairia.com/api/products?search={$search}";
    $json = file_get_contents($url);
    $results = json_decode($json, true);
}
?>
<form method="GET">
    <input type="text" name="q" placeholder="Search products...">
    <button type="submit">Search</button>
</form>
<?php if (!empty($results)): ?>
    <h2>Results for "<?php echo htmlspecialchars($_GET['q']); ?>"</h2>
    <ul>
        <?php foreach ($results as $product): ?>
            <li>
                <a href="product.php?id=<?php echo $product['id']; ?>">
                    <?php echo $product['name']; ?>
                </a>
                – <?php echo $product['price']; ?> €
            </li>
        <?php endforeach; ?>
    </ul>
<?php elseif (isset($_GET['q'])): ?>
    <p>No products found.</p>
<?php endif; ?>