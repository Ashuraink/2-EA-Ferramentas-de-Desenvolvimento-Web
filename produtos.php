<?php
// Array de produtos
$produtos = [
  [
    "nome" => "Snack Saudável",
    "descricao" => "Snack feito com frutas desidratadas",
    "preco" => 15.90
  ],
  [
    "nome" => "Refeição Congelada Fitness",
    "descricao" => "Refeição balanceada, rica em proteinas",
    "preco" => 25.99
  ],
  [
    "nome" => "Suco Natural Detox",
    "descricao" => "Suco natural a base de frutas e vegetais",
    "preco" => 8.75
  ]
];
?>
<?php

// Array de produtos já criado aqui...

// Iterar sobre os produtos e exibi-los
foreach ($produtos as $produto) {
  echo "<div>";
  echo "<h2>" . $produto['nome'] . "</h2>"; // Exibe o nome do produto
  echo "<p>" . $produto['descricao'] . "</p>"; // Exibe a descrição
  echo "<p>Preço: R$" . number_format($produto['preco'], 2, ',', '.') . "</p>"; // Exibe o preço formatado
  // Link para a página de detalhes
  echo '<a href="detalhe_produto.php?nome=' . urlencode($produto['nome']) . '">Ver detalhes</a>';
  echo "</div><hr>";
}
?>