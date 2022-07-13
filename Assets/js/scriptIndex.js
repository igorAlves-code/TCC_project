// Animação Formulário de Login, transição Email => Senha

// Validação do campo Email
const inputEmail = document.getElementById('email');
function checkEmail(field) {
    user = field.value.substring(0, field.value.indexOf("@"));
    domain = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

    if ((user.length >= 1) &&
        (domain.length >= 3) &&
        (user.search("@") == -1) &&
        (domain.search("@") == -1) &&
        (user.search(" ") == -1) &&
        (domain.search(" ") == -1) &&
        (domain.search(".") != -1) &&
        (domain.indexOf(".") >= 1) &&
        (domain.lastIndexOf(".") < domain.length - 1)) {
        inputEmail.style.backgroundColor = 'lightgreen';
    }
    else {
        inputEmail.style.backgroundColor = 'lightcoral';
    }
}

checkEmail(inputEmail);

const buttonNextForm = document.getElementById('buttonNextForm');
buttonNextForm.addEventListener('click', function nextForm() {
    if (checkEmail === true) {
        buttonNextForm.classList.toggle('hidding');
    }
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