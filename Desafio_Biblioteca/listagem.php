<?php

include("conexao.php");

$sql = "SELECT id, titulo, autor, categoria, ano FROM livros";
$result = $conn->query($sql);

?>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

    <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2 class='paragrafo'><b>ID do livro:</b> " . $row['id'] . "</>";
        echo "<p class='paragrafo'><b>Título:</b> " . $row['titulo'] . "</p>";
        echo "<p class='paragrafo'><b>Autor:</b> " . $row['autor'] . "</p>";
        echo "<p class='paragrafo'><b>Categoria:</b> " . $row['categoria'] . "</p>";
        echo "<p class='paragrafo'><b>Ano:</b> " . $row['ano'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "<p class='paragrafo'>Nenhum livro cadastrado.</p>";
}
?>

    </div>
</body>
</html>
