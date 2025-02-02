const link = document.querySelector('a'); // Para o link
const section = document.querySelector('.texto'); // Seleciona a classe .texto corretamente

link.addEventListener('click', function(event) {
    event.preventDefault(); // Evita o comportamento padrão do navegador
    alert("Tu será redirecionado ao Instagram!");
    window.location.href = "https://www.instagram.com/gabrielbussab/";
});

section.addEventListener('mouseover', function() {
    console.log("Mouse sobre a section"); // Verifique se o evento é disparado
    section.style.color = 'blue'; // Altera a cor para azul ao passar o mouse
});

section.addEventListener('mouseout', function() {
    console.log("Mouse saiu da section"); // Verifique se o evento é disparado
    section.style.color = 'rgb(85, 69, 69)'; // Volta à cor original ao tirar o mouse
}); 
