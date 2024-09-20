<?php
// Inclui o arquivo produtos.php para acessar os produtos
include 'produtos.php';
include 'db.php';
// Adicionar estilos para os produtos
echo '<style>
        body {
            font-family: Arial, sans-serif; /* Define a fonte Arial */
            text-align: center; /* Centraliza o texto */
        }
        .btn-detalhes {
            background-color: #007bff; /* Cor azul */
            color: white; /* Texto branco */
            padding: 10px 15px; /* Espaçamento interno do botão */
            border: none; /* Sem borda */
            border-radius: 5px; /* Bordas arredondadas */
            text-decoration: none; /* Remover sublinhado do link */
            font-size: 16px; /* Tamanho do texto */
        }
        .btn-detalhes:hover {
            background-color: #0056b3; /* Cor mais escura ao passar o mouse */
        }
        div {
            margin: 20px; /* Margem ao redor de cada bloco de produto */
        }
        h2 {
            text-decoration: underline; /* Sublinha os nomes dos produtos */
            color: #333; /* Cor do texto */
        }
    </style>';

// Iterar sobre os produtos e exibi-los
foreach ($produtos as $produto) {
    echo "<div>";
    echo "<h2>" . htmlspecialchars($produto['nome']) . "</h2>"; // Exibe o nome do produto
    echo "<p>" . htmlspecialchars($produto['descricao']) . "</p>"; // Exibe a descrição
    echo "<p>Preço: R$" . number_format($produto['preco'], 2, ',', '.') . "</p>"; // Exibe o preço formatado
    // Link para a página de detalhes
    echo '<a class="btn-detalhes" href="detalhe_produto.php?nome=' . urlencode($produto['nome']) . '">Ver detalhes</a>';
    echo "</div><hr>";
}
?>