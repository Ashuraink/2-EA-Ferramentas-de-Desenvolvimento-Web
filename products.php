<?php
include 'db.php';

$query = $pdo->query("SELECT * FROM products");
$products = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Product List</title>
</head>

<body>
  <h1>Available Products</h1>
  <ul>
    <?php foreach ($products as $product): ?>
      <li>
        <?= $product['name'] ?> - $<?= $product['price'] ?>
        <a href="delete_product.php?id=<?= $product['id'] ?>">Remove</a>
        <a href="alterar.php?id=<?= $product['id'] ?>">Edit</a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>