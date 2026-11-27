
<?php

session_start();

if (!isset($_SESSION['assinante_id'])) {
    header("Location: login.html");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita - Editora Br@sil</title>
</head>
<body style="font-family: Arial, sans-serif; padding: 20px;">

    <p style="text-align: right;">
        Olá,
        <strong><?php echo htmlspecialchars($_SESSION['assinante_nome']); ?></strong> |
        Para sair do sistema da EDITORA BR@SIL,
        <a href="sair.php" style="color: red;">clique aqui</a>.
    </p>

    <div style="background-color: #176b87; color: #FFFFFF; padding: 15px; font-weight: bold;">
        ESPAÇO RESTRITO AOS ASSINANTES — PLANO:
        <?php echo htmlspecialchars($_SESSION['assinante_plano']); ?>
    </div>

    <h3 style="text-align: center; margin-top: 25px;">
        O QUE VOCÊ DESEJA FAZER?
    </h3>

    <ul>
        <li>Alterar Dados Pessoais do Cadastro (Endereço)</li>
        <li>Renovar Assinaturas</li>
        <li>Trocar Senha</li>
        <li>Consultar Situação de Pagamento</li>
        <li>Cancelar Assinatura</li>
    </ul>

</body>
</html>
