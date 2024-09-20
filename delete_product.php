<?php
include 'db.php';

$id = $_GET['id'];
$query = $pdo->prepare("DELETE FROM products WHERE id = :id");
$query->execute([':id' => $id]);

header('Location: products.php');
exit;
?>