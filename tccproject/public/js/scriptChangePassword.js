document.querySelectorAll(".input").forEach((element) => {
    element.addEventListener("blur", (event) => {
        if (event.target.value != "") {
            event.target.nextElementSibling.classList.add("filled");
        } else {
            event.target.nextElementSibling.classList.remove("filled");
        }
    });
});



const inputPassword = document.querySelector("#password");
const inputNewPassword = document.querySelector("#newPassword");
const inputConfirmPassword = document.querySelector("#confirmPassword");
const eyePassword = document.querySelector("#eyePassword");
const eyeNewPassword = document.querySelector("#eyeNewPassword");
const eyeConfirmPassword = document.querySelector("#eyeConfirmPassword");

eyePassword.addEventListener("click", () => {
    inputPassword.classList.toggle("pw");
    eyePassword.classList.toggle("cancel");
});

eyeNewPassword.addEventListener("click", () => {
    inputNewPassword.classList.toggle("pw");
    eyeNewPassword.classList.toggle("cancel");
});

eyeConfirmPassword.addEventListener("click", () => {
    inputConfirmPassword.classList.toggle("pw");
    eyeConfirmPassword.classList.toggle("cancel");
});