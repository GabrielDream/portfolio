// Verificando a carga do script
console.log("Script JS carregado!");

//Alterrar a area do sobre:
const navSobre = document.querySelector ('#navSobre');
const linkSobre = document.querySelector('a[href="sobre.php"]');
const linkServico = document.querySelector ('a[href="serviço.php"]');

//Ao passar o mouse em cima
if (navSobre) {
    navSobre.addEventListener('mouseover', function() {
        navSobre.classList.add('hover');
    });

    navSobre.addEventListener('mouseout', function() {
        navSobre.classList.remove('hover');
    });
}

if (linkSobre) {
    linkSobre.addEventListener('click', function (event) {
        event.preventDefault(); 
        alert("Será redirecionado a página sobre"); 
        window.location.href = "sobre.php";
    });
}

//com botão de confirmação:
if (linkServico) {
    linkServico.addEventListener('click', function(event) {
        event.preventDefault(); 

        const confirme = confirm("Quer ir para a página de serviços?");
        if (confirme) {
            window.location.href = "serviço.php"; 
        }
    });
}

//Para validar o formulário:
// Para validar o formulário (somente na página de contato)
const formulario = document.querySelector('#formularioDeContato');
if (formulario) {
    formulario.addEventListener('submit', function(event) {
        event.preventDefault();

        const nome = document.querySelector('#nome').value;
        const email = document.querySelector('#email').value; 
        const mensagem = document.querySelector('#mensagem').value;

        // Validação dos campos
        if (!nome || !email || !mensagem) {
            alert("Por favor, preencha todos os campos!");
            return; // Impede o envio caso algum campo esteja vazio
        }

        // Validação do formato de email
        const validEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!validEmail.test(email)) {
            alert("Email precisa seguir o formato padrão!");
            return;
        }

        alert("Formulário enviado com sucesso!");
    });
}


