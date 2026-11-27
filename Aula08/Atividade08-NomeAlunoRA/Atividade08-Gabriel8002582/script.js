
function validarAtividade() {
    const campoNome = document.getElementById("txtNome");
    const campoEmail = document.getElementById("txtEmail");
    const campoSenha = document.getElementById("txtSenha");

    const erroNome = document.getElementById("erroNome");
    const erroEmail = document.getElementById("erroEmail");
    const erroSenha = document.getElementById("erroSenha");
    const mensagemSucesso = document.getElementById("mensagemSucesso");

    limparErros();

    let valido = true;

    if (campoNome.value.trim().length < 3) {
        campoNome.classList.add("campo-erro");
        erroNome.textContent = "Digite um nome com pelo menos 3 caracteres.";
        valido = false;
    } else {
        campoNome.classList.add("campo-sucesso");
    }

    const emailValor = campoEmail.value.trim();

    if (emailValor === "") {
        campoEmail.classList.add("campo-erro");
        erroEmail.textContent = "Informe seu endereço de e-mail.";
        valido = false;
    } else if (!emailValor.includes("@") || !emailValor.includes(".")) {
        campoEmail.classList.add("campo-erro");
        erroEmail.textContent = "Digite um endereço de e-mail válido.";
        valido = false;
    } else {
        campoEmail.classList.add("campo-sucesso");
    }

    if (campoSenha.value.length < 6) {
        campoSenha.classList.add("campo-erro");
        erroSenha.textContent = "A senha precisa ter pelo menos 6 caracteres.";
        valido = false;
    } else {
        campoSenha.classList.add("campo-sucesso");
    }

    if (valido) {
        mensagemSucesso.className = "status-box sucesso";
        mensagemSucesso.textContent = "Cadastro realizado com sucesso! Bem-vindo, " + campoNome.value + ".";
    }
}

function limparErros() {
    const campos = document.querySelectorAll(".campo");

    campos.forEach(campo => {
        campo.classList.remove("campo-erro", "campo-sucesso");
    });

    const erros = document.querySelectorAll(".mensagem-erro");

    erros.forEach(erro => {
        erro.textContent = "";
    });

    const mensagem = document.getElementById("mensagemSucesso");

    mensagem.className = "status-box";
    mensagem.textContent = "";
}

function limparCampos() {
    document.getElementById("formAtividade").reset();
    limparErros();
}
