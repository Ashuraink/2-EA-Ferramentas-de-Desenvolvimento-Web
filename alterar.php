<?php
include 'db.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = $pdo->prepare("SELECT * FROM products WHERE id = :id");
  $query->execute([':id' => $id]);
  $product = $query->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  $query = $pdo->prepare("UPDATE products SET name = :name, price = :price, description = :description WHERE id = :id");
  $query->execute([':name' => $name, ':price' => $price, ':description' => $description, ':id' => $id]);

  header('Location: products.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Edit Product</title>
</head>

<body>
  <h1>Edit Product</h1>
  <form method="POST" action="alterar.php">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $product['name'] ?>"><br>
    <label>Price:</label>
    <input type="text" name="price" value="<?= $product['price'] ?>"><br>
    <label>Description:</label>
    <textarea name="description"><?= $product['description'] ?></textarea><br>
    <button type="submit">Update</button>
  </form>
</body>

</html>