document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.querySelector("form");

    formulario.addEventListener('submit', function(event) {
        let valid = true;

        //DADOS DO FOMULARIO:
        const nome = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim(); 
        const mensagem = document.getElementById("message").value.trim(); 

        //validação do nome:
        if(nome === '') {
            alert ('O nome é obrigatório!');
            valid = false;
        }

        //validação do email:
        const emailPatter = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if(email === '') {
            alert ('O email é inválido!');
            valid = false;
        } else if (!emailPatter.test(email)) {
            alert ('email precisa ser válido!');
        }

        //validação de mensagem:
        if (mensagem === '') {
            alert("Mensagem não pode ficar em branco!");
            valid = false;
        }

        if(!valid) {
            event.preventDefault();
        }
    });
});

