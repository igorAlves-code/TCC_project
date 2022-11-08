document.querySelectorAll(".text-input").forEach((element) => {
    element.addEventListener("blur", (event) => {
        if (event.target.value != "") {
            event.target.nextElementSibling.classList.add("filled");
        } else {
            event.target.nextElementSibling.classList.remove("filled");
        }
    });
});

const inputPassword = document.querySelector("#password");
const eyePassword = document.querySelector("#eyePassword");

eyePassword.addEventListener("click", () => {
    inputPassword.classList.toggle("pw");
    eyePassword.classList.toggle("cancel");
});
