// Ativação da animação do Formulário de Login, transição Email => Senha
const emailForm = document.querySelector("#emailForm");
const buttonNextForm = document.querySelector("#buttonNextForm");
const passwordForm = document.querySelector("#passwordForm");
const formLogin = document.querySelector("#formLogin");

buttonNextForm.addEventListener("click", () => {
    // emailForm.style.animation = "";
    // setTimeout(() => emailForm.style.animation = "hidding 1s;", 1);

    emailForm.classList.add("hidding");

    // passwordForm.style.animation = "";
    // setTimeout(() => passwordForm.style.animation = "appearing 1s", 1);

    passwordForm.classList.add("appearing");

    formLogin.classList.add("adequating");
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

// Ativação da animação do Formulário de Login, transição Email => Senha
// const emailForm = document.querySelector('#emailForm');
// function nextForm() {
//     emailForm.classList.toggle('.hidding');
// };

// const buttonNextForm = document.querySelector('#buttonNextForm');

// buttonNextForm.addEventListener('click', () => {
//     emailForm.style.animation = "";
//     setTimeout(() => emailForm.style.animation = "hidding 1s", 1);
//     emailForm.classList.toggle('.hidding');

// });
