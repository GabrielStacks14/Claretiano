
<?php

require_once "conexao.php";

$sql = "SELECT id, nome, email, plano, data_cadastro FROM assinantes ORDER BY nome ASC";

$resultado = mysqli_query($conexao, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editora Br@sil - Assinantes Cadastrados</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">

    <h2 style="color: #176b87;">Relatório de Assinantes - Editora Br@sil</h2>

    <p><a href="login.html">Área do Assinante (Login)</a></p>

    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 800px;">

        <tr style="background-color: #176b87; color: #FFFFFF;">
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Plano</th>
            <th>Data</th>
        </tr>

        <?php

        if ($resultado) {

            while ($linha = mysqli_fetch_assoc($resultado)) {

                echo "<tr>";

                echo "<td>" . htmlspecialchars($linha['id']) . "</td>";
                echo "<td>" . htmlspecialchars($linha['nome']) . "</td>";
                echo "<td>" . htmlspecialchars($linha['email']) . "</td>";
                echo "<td>" . htmlspecialchars($linha['plano']) . "</td>";
                echo "<td>" . htmlspecialchars($linha['data_cadastro']) . "</td>";

                echo "</tr>";

            }

        } else {

            echo "<tr><td colspan='5'>Erro ao consultar assinantes.</td></tr>";

        }

        ?>

    </table>

</body>
</html>

<?php

mysqli_close($conexao);

?>
