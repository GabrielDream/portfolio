//TESTE:
console.log("Script carregado com sucesso!");

// 1. Funções Independentes
//Função para exibir erro:
function exibirErro (campo, mensagem) {
    let span = campo.nextElementSibling; // Tenta pegar o próximo elemento do campo (onde vai exibir o erro)
    if(!span || span.tagName !== "SPAN") {
        span = document.createElement("span"); // Se não encontrar o erro, cria um novo elemento <span>
        span.style.color = "red"; // Estiliza a mensagem de erro
        span.style.fontSize = "12px"; 

        campo.parentNode.insertBefore(span, campo.nextElementSibling);
    }

    span.textContent = mensagem; // Define o texto da mensagem de erro
}

//Função para remover o erro
function removerErro (campo) {
    campo.style.borderColor = ""; // Reseta o estilo da borda do campo

    const span = campo.nextElementSibling; // Pega o <span> de erro próximo ao campo
    if(span && span.tagName === "SPAN") {
        span.remove();
    }
}

//2.Função de validação 
// Função para validar se o campo foi preenchido
function validarCampo (campo, mensagemErro) {
    if(!campo.value.trim()) {
        exibirErro(campo, mensagemErro); //Exibe o erro se o campo estiver vazio. 
        return false;
    }else {
        removerErro(campo); 
        return true;
    }
}

// Função para validar email
function validarEmail (campo) {
    const regeEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expressão regular para validar o email

    if(!regeEmail.test(campo.value)) { // Testa se o valor do campo bate com a regex
        exibirErro(campo, "Inserir um email válido!");
        return false;
    } else {
        removerErro(campo);
        return true;
    }
}

// 3. Validação em Tempo Real
//Seleciona os campos do formulario
const formulario = document.getElementById("formularioParaContato");
const campos = {
    nome: document.getElementById("name"),
    email: document.getElementById("email"),
    mensagem: document.getElementById("message"),
};

// Pega todos os valores do objeto `campos` (os elementos do formulário: nome, email, mensagem)
// e os transforma em uma lista para podermos percorrer.
Object.values(campos).forEach((campo) => { 
    // Para cada campo, adiciona um ouvinte de evento "input".
    // O evento "input" dispara toda vez que o usuário digita ou modifica o valor no campo.
    campo.addEventListener("input", () => { 
        // Valida se o campo atual foi preenchido.
        // Caso esteja vazio, exibe a mensagem de erro no campo correspondente.
        validarCampo(campo, `O campo ${campo.id} é obrigatório.`);
        
        // Se o campo atual for o campo de email, executa uma validação específica para emails.
        // Isso verifica se o valor digitado no campo de email é válido.
        if (campo === campos.email) { 
            validarEmail(campo); 
        }
    });
});

formulario.addEventListener("submit", (evento) => {
    let valido = true; // Inicializa uma variável que verifica se todos os campos estão válidos.
    
    // Valida o campo "nome". Se estiver inválido, "valido" será definido como false.
    if (!validarCampo(campos.nome, "O campo nome é obrigatório!")) {
        valido = false;
    }

    if(!validarCampo(campos.email, "Email precisa ser válido e no formato @!") || !validarEmail(campos.email)) {
        valido = false; 
    }

    if(!validarCampo(campos.mensagem, "Assunto precisa ser preenchido!")) {
        valido = false;
    }

    if (!valido) {
        evento.preventDefault();
        alert("Por favor, preencha todos os campos!");
    }
});