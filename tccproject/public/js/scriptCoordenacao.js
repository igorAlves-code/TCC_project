const menuOptions = document.querySelectorAll(".menuOptions");
const tablesCrud = document.querySelectorAll(".table");

function hideEffect() {
    for (let i = 0; i < menuOptions.length; i++) {
        const element = menuOptions[i];
        element.classList.remove("active");
        element.addEventListener("click", () => {
            element.classList.add("active");
        })
    }
}

// const currentLocation = location.href;
const menuOptionsLength = menuOptions.length;


for (let i = 0; i < menuOptionsLength; i++) {
	if (menuOptions[i].href === currentLocation) {
		menuOptions[i].className = "active";
	}
}

