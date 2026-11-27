
<?php

require_once "conexao.php";

$nome = $_POST['nome_assinante'] ?? '';
$email = $_POST['email_assinante'] ?? '';
$plano = $_POST['plano_escolhido'] ?? '';

if (empty($nome) || empty($email) || empty($plano)) {

    echo "<h2 style='color:red;'>Erro: Preencha todos os campos!</h2>";
    echo "<a href='cadastro.html'>Voltar</a>";

} else {

    echo "<h2>Assinatura realizada com sucesso!</h2>";

    echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
    echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Plano escolhido:</strong> " . htmlspecialchars($plano) . "</p>";

    if ($plano == "Revista Semestral") {

        $brinde = "Marcador de Página";

    } elseif ($plano == "Revista Anual") {

        $brinde = "Ecobag da Editora Br@sil";

    } else {

        $brinde = "Acesso VIP ao Acervo + Ecobag";

    }

    echo "<p><strong>Brinde:</strong> " . htmlspecialchars($brinde) . "</p>";

    echo "<p style='color:green;'>Conexão com o banco editora_brasil estabelecida com sucesso!</p>";

}

mysqli_close($conexao);

?>
