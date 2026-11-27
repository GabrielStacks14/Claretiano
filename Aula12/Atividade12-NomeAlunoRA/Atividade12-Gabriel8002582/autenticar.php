
<?php

session_start();

require_once "conexao.php";

$email = $_POST['email_login'] ?? '';
$senha = $_POST['senha_login'] ?? '';

$email = mysqli_real_escape_string($conexao, $email);
$senha = mysqli_real_escape_string($conexao, $senha);

$sql = "SELECT id, nome, plano FROM assinantes WHERE email = '$email' AND senha = '$senha'";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) == 1) {

    $assinante = mysqli_fetch_assoc($resultado);

    $_SESSION['assinante_id'] = $assinante['id'];
    $_SESSION['assinante_nome'] = $assinante['nome'];
    $_SESSION['assinante_plano'] = $assinante['plano'];

    header("Location: restrito.php");
    exit;

} else {

    echo "<h2 style='color:red;'>E-mail ou senha inválidos!</h2>";
    echo "<a href='login.html'>Voltar para o login</a>";

}

mysqli_close($conexao);

?>
