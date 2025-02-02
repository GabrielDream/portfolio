// Seleciona o formulário e a tabela pelo ID
const form = document.getElementById('Formulario');
const tableBody = document.querySelector('table tbody');

// Adiciona um evento ao formulário para capturar o envio
form.addEventListener('submit', function(event) {
    event.preventDefault(); // Previne o comportamento padrão do formulário

    // Coleta os valores dos campos de entrada
    const nome = document.getElementById('nome').value;
    const idade = document.getElementById('idade').value;
    const cidade = document.getElementById('cidade').value;

    // Cria uma nova linha na tabela
    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>${nome}</td>
        <td>${idade}</td>
        <td>${cidade}</td>
    `;

    // Adiciona a nova linha ao corpo da tabela
    tableBody.appendChild(newRow);

    // Limpa os campos do formulário após o envio
    form.reset();
});
