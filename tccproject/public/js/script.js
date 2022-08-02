// Ativação da animação do Formulário de Login, transição Email => Senha
const emailForm = document.querySelector('#emailForm');
// function nextForm() {
//     emailForm.classList.toggle('.hidding');
// };

const buttonNextForm = document.querySelector('#buttonNextForm');

buttonNextForm.addEventListener('click', () => {
    emailForm.style.animation = "";
    setTimeout(() => emailForm.style.animation = "hidding 1s", 1);
    emailForm.classList.toggle('.hidding');
    
});

/*
let btn = document.getElementById('olho');
btn.addEventListener('click', function() {
    let input = document.getElementById('pass');
    if(input.getAttribute('type') == 'password') {
        input.setAttribute('type', 'text');
    } else {
        input.setAttribute('type', 'password');
    }
});
*/