
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante de Assinatura - Editora Br@sil</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

    <div id="conteudo">

        <h2>Comprovante de Assinatura - Editora Br@sil</h2>
        <hr>

        <!-- PASSO 3: Exibindo o protocolo -->

        <div class="protocolo-destaque">
            Protocolo de Atendimento:
            <?php echo $protocolo; ?>
        </div>

        <!-- PASSO 1: Exibindo os dados -->

        <div class="comprovante-box">

            <p><strong>Prezado(a):</strong>
                <?php echo $nome; ?>
            </p>

            <p><strong>E-mail Cadastrado:</strong>
                <?php echo $email; ?>
            </p>

            <p><strong>Cidade de Entrega:</strong>
                <?php echo $cidade; ?>
            </p>

            <p><strong>Plano Contratado:</strong>
                <?php echo $plano; ?>
            </p>

            <p><strong>Forma de Pagamento:</strong>
                <?php echo $pagamento; ?>
            </p>

            <p><strong>Data de Processamento:</strong>
                <?php echo $dataRegistro; ?>
            </p>

        </div>

        <!-- PASSO 2: Exibindo o resumo -->

        <div class="aviso-sucesso">

            <strong>Resumo do Pedido:</strong><br>

            <em><?php echo $resumoEntrega; ?></em>

        </div>

        <a href="cadastro.html" class="botao botao-voltar">
            &larr; Voltar ao formulário
        </a>

    </div>

</body>
</html>
