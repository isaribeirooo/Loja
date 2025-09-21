
<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<h2 style="text-align:center; margin:20px 0;">Coleção Style’s Forever</h2>
<div class="produtos">
<?php
$stmt = $pdo->query("SELECT * FROM produtos");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='produto'>";
        echo "<img src='{$row['imagem']}' alt='{$row['nome']}'>";
            echo "<h3>{$row['nome']}</h3>";
                echo "<p class='preco'>R$ " . number_format($row['preco'], 2, ',', '.') . "</p>";
                    
                        echo "<a href='listar.php' class='btn'>Ver detalhes</a>";
                            echo "</div>";
                            }
                            ?>
                            </div>

                            </main>
                            </body>
                            </html>