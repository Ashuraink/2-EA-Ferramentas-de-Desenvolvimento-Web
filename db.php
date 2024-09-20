<?php
$host = 'localhost';
$db = 'saborela_2024';
$user = 'root';
$pass = '';

// Using PDO
try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Falha na conexão: " . $e->getMessage());
}
?>