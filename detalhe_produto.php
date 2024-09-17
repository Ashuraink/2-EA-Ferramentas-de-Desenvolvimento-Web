<?php
// Inclui o arquivo produtos.php para acessar os produtos
include 'produtos.php';

// Verifica se o nome do produto foi passado via URL
if (isset($_GET['nome'])) {
  $nomeProduto = urldecode($_GET['nome']); // Decodifica o nome do produto passado pela URL

  // Procura o produto pelo nome
  foreach ($produtos as $produto) {
    if ($produto['nome'] == $nomeProduto) {
      echo "<h1>" . $produto['nome'] . "</h1>"; // Exibe o nome do produto
      echo "<p>" . $produto['descricao'] . "</p>"; // Exibe a descrição do produto
      echo "<p>Preço: R$" . number_format($produto['preco'], 2, ',', '.') . "</p>"; // Exibe o preço formatado
      break;
    }
  }
} else {
  echo "<p>Produto não encontrado.</p>"; // Mensagem caso o produto não seja encontrado
}
?>