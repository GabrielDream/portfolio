// Seleciona os campos e o formulário
const formulario = document.getElementById("formularioParaContato"); 
const campos = {
    nome: document.getElementById("nome"),
    email: document.getElementById("email"),
    assunto: document.getElementById("assunto"),
    mensagem: document.getElementById("mensagem"),
};

// Função para validação:
function validarCampo (campo, mensagemErro) {
    if(!campo.value.trim()) {
        exibirErro(campo, mensagemErro); 
        return false;
    } else {
        removerErro(campo); 
        return true;
    }
}

// Função para validar email:
function validarEmail (campo) {
    const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!regexEmail.test(campo.value)) {
        exibirErro(campo, "Inserir email válido!");
        return false;
    } else {
        removerErro(campo);
        return true; 
    }
}

// Função para exibir erro 
function exibirErro(campo, mensagem) {
    let span = campo.nextElementSibling; 
    if (!span || span.tagName !== "SPAN") {
        span = document.createElement("span");
        span.style.color = "red";
        span.style.fontSize = "12px";
        campo.parentNode.insertBefore(span, campo.nextSibling);
    }
    span.textContent = mensagem;
}

// Função para Remover o erro 
function removerErro(campo) {
    campo.style.borderColor = "";
    const span = campo.nextElementSibling;
    if (span && span.tagName === "SPAN") {
        span.remove();  // Remove a mensagem de erro se ela existir
    }
}

// Validação em tempo real:
Object.values(campos).forEach((campo) => {
    campo.addEventListener("input", () => {
        // Valida todos os campos
        validarCampo(campo, `O campo ${campo.id} é obrigatório.`);
        if (campo === campos.email) {
            validarEmail(campo);  // Valida o email especificamente
        }
    });
});

// Validação ao enviar:
formulario.addEventListener("submit", (evento) => {
    let valido = true;

    console.log("Validando o formulário...");  // Log para verificar se a função é chamada

    // Validações dos campos
    if(!validarCampo(campos.nome, "O campo nome é obrigatório")) valido = false; 
    if(!validarCampo(campos.email, "O campo email é obrigatório") || !validarEmail(campos.email)) valido = false;
    if(!validarCampo(campos.assunto, "O campo assunto é obrigatório!")) valido = false;
    if (!validarCampo(campos.mensagem, "O campo Mensagem é obrigatório.")) valido = false;

    // Se houver erro, evita o envio
    if(!valido) {
        evento.preventDefault();  // Previne o envio do formulário
        alert("Por favor, preencha todos os campos corretamente!");
    }
});




