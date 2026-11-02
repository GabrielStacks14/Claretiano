
<?php
/* ==========================================================================
   Atividade de Laboratório 09 - O Primeiro Back-End da Editora Br@sil
   Aluno(a): [Preencha seu Nome Completo]
   RA: [Preencha seu RA]
   ========================================================================== */

// PASSO 1 - Recebendo os dados do formulário

$nome = $_POST['nome_assinante'];
$email = $_POST['email_assinante'];
$cidade = $_POST['cidade_assinante'];
$plano = $_POST['plano_escolhido'];
$pagamento = $_POST['forma_pagamento'];

$dataRegistro = date("d/m/Y");

// PASSO 2 - Concatenação com ponto

$resumoEntrega = "O assinante " . $nome .
                 " receberá a revista em " . $cidade .
                 ". E-mail: " . $email;

// PASSO 3 - Protocolo dinâmico

$protocolo = "BR-" . date("Y") . "-" . rand(1000, 9999);

// Envia os dados para a página do comprovante

include "comprovante.php";

?>
