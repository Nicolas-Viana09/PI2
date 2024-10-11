// Validação simples do formulário
function validarFormulario(evento) {

    const nome = document.querySelector('input[name="name"]').value;
    const email = document.querySelector('input[name="email"]').value;
    const mensagem = document.querySelector('textarea[name="message"]').value;

    if (nome === "" || email === "" || mensagem === "") {
        alert("Por favor, preencha todos os campos.");
    } else if (!validarEmail(email)) {
        alert("Insira um e-mail válido.");
    } else {
        alert("Mensagem enviada com sucesso!");
        document.querySelector('form').submit();
    }
}




//Animação smooth
function rolarSuave() {
    const links = document.querySelectorAll('nav ul li a');

    links.forEach(link => {
        link.addEventListener('click', function (evento) {
            evento.preventDefault(); 
            const destino = document.querySelector(this.getAttribute('href'));
            
            window.scrollTo({
                top: destino.offsetTop - 50,
                behavior: 'smooth' 
            });
        });
    });
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('form').addEventListener('submit', validarFormulario);
    rolarSuave();
});
