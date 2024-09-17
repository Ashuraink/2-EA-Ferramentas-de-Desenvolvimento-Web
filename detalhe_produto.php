<?php
// Inclui o arquivo produtos.php para acessar os produtos
include 'produtos.php';

// Adicionar estilos para a caixa de detalhes do produto
echo '<style>
        .caixa-detalhes {
            border: 1px solid #ddd; /* Borda cinza clara */
            padding: 20px; /* Espaçamento interno */
            border-radius: 10px; /* Bordas arredondadas */
            background-color: #f9f9f9; /* Fundo claro */
            max-width: 600px; /* Largura máxima */
            margin: 20px auto; /* Centralizar a caixa */
        }
        h1 {
            font-size: 24px;
            color: #007bff; /* Título com cor azul */
        }
        p {
            font-size: 18px;
        }
    </style>';

if (isset($_GET['nome'])) {
  $nomeProduto = urldecode($_GET['nome']); // Decodifica o nome do produto passado pela URL

  // Procura o produto pelo nome
  foreach ($produtos as $produto) {
    if ($produto['nome'] == $nomeProduto) {
      echo '<div class="caixa-detalhes">';
      echo "<h1>" . htmlspecialchars($produto['nome']) . "</h1>"; // Exibe o nome do produto
      echo "<p><strong>Descrição:</strong> " . htmlspecialchars($produto['descricao']) . "</p>"; // Exibe a descrição do produto
      echo "<p><strong>Preço:</strong> R$" . number_format($produto['preco'], 2, ',', '.') . "</p>"; // Exibe o preço formatado
      echo '</div>';
      break;
    }
  }
} else {
  echo "<p>Produto não encontrado.</p>"; // Mensagem caso o produto não seja encontrado
}
?>