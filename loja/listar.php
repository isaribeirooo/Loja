<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<h2 style="text-align:center; margin:20px 0;">Gerenciar Produtos</h2>
<a href="form_cadastrar.php" class="btn" style="margin-left:5%;">+ Novo Produto</a>

<table>
    <tr>
            <th>ID</th>
                    <th>Nome</th>
                            <th>Preço</th>
                                    <th>Imagem</th>
                                            <th>Ações</th>
                                                </tr>
                                                    <?php
                                                        $stmt = $pdo->query("SELECT * FROM produtos");
                                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                                    echo "<tr>";
                                                                            echo "<td>{$row['id']}</td>";
                                                                                    echo "<td>{$row['nome']}</td>";
                                                                                            echo "<td>R$ " . number_format($row['preco'], 2, ',', '.') . "</td>";
                                                                                                            echo "<td>
                                                                                                                            <a href='form_atualizar.php?id={$row['id']}' class='btn'>Editar</a>
                                                                                                                                          </td>";
                                                                                                                                                  echo "</tr>";
                                                                                                                                                      }
                                                                                                                                                          ?>
                                                                                                                                                          </table>

                                                                                                                                                          </main>
                                                                                                                                                          </body>
                                                                                                                                                          </html>