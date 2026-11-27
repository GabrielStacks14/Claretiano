
<?php

require_once "conexao.php";

$nome = trim($_POST['nome_assinante'] ?? '');
$email = trim($_POST['email_assinante'] ?? '');
$plano = trim($_POST['plano_escolhido'] ?? '');
$dataCadastro = date("Y-m-d");

if (empty($nome) || empty($email) || empty($plano)) {

    echo "<h2 style='color:red;'>Erro: Preencha todos os campos!</h2>";
    echo "<a href='cadastro.html'>Voltar</a>";

} else {

    $parteNome = substr($nome, 0, 3);
    $parteEmail = substr($email, 0, 3);

    $senhaGerada = strtolower($parteNome . $parteEmail . "26");

    $emailSeguro = mysqli_real_escape_string($conexao, $email);

    $sqlVerifica = "SELECT id FROM assinantes WHERE email = '$emailSeguro'";

    $resultadoVerifica = mysqli_query($conexao, $sqlVerifica);

    if (mysqli_num_rows($resultadoVerifica) > 0) {

        echo "<h2 style='color:orange;'>E-mail já cadastrado!</h2>";
        echo "<p>Este e-mail já possui uma assinatura registrada.</p>";
        echo "<a href='cadastro.html'>Voltar</a>";

    } else {

        $nomeSeguro = mysqli_real_escape_string($conexao, $nome);
        $planoSeguro = mysqli_real_escape_string($conexao, $plano);
        $senhaSegura = mysqli_real_escape_string($conexao, $senhaGerada);

        $sqlInsert = "INSERT INTO assinantes (nome, email, senha, plano, data_cadastro)
        VALUES ('$nomeSeguro', '$emailSeguro', '$senhaSegura', '$planoSeguro', '$dataCadastro')";

        if (mysqli_query($conexao, $sqlInsert)) {

            echo "<div style='max-width:500px; margin:30px auto; padding:25px; border:1px solid #ccc; border-radius:8px; font-family:Arial;'>";

            echo "<h2 style='color:green;'>Assinatura cadastrada com sucesso!</h2>";

            echo "<h3>Comprovante de Assinatura</h3>";

            echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
            echo "<p><strong>Plano:</strong> " . htmlspecialchars($plano) . "</p>";
            echo "<p><strong>E-mail (Login):</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Senha gerada:</strong> " . htmlspecialchars($senhaGerada) . "</p>";
            echo "<p><strong>Data do cadastro:</strong> " . date("d/m/Y") . "</p>";

            echo "<p style='color:green;'>Dados gravados no banco de dados com sucesso!</p>";

            echo "<a href='cadastro.html'>Voltar ao cadastro</a>";

            echo "</div>";

        } else {

            echo "<h2 style='color:red;'>Erro ao cadastrar assinatura!</h2>";
            echo "<p>" . htmlspecialchars(mysqli_error($conexao)) . "</p>";

        }
    }
}

mysqli_close($conexao);

?>
