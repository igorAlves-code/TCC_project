const inputPassword = document.querySelector("#password");
const inputConfirmPassword = document.querySelector("#confirmPassword");
const eyePassword = document.querySelector("#eyePassword");
const eyeConfirmPassword = document.querySelector("#eyeConfirmPassword");

eyePassword.addEventListener("click", () => {
    inputPassword.classList.toggle("pw");
    eyePassword.classList.toggle("cancel");
});

eyeConfirmPassword.addEventListener("click", () => {
    inputConfirmPassword.classList.toggle("pw");
    eyeConfirmPassword.classList.toggle("cancel");
});