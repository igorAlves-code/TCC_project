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

// const menuAdmin = document.querySelector("#check")

let btnEdit = $('.btn-edit');
btnEdit.on('click', function(){
    let value = btnEdit.value;
    console.log(value);
//     // let nome = $(this).data('nomeAmbiente'); // vamos buscar o valor do atributo data-name que temos no botão que foi clicado
//     let id = $('.btn-edit').value; // vamos buscar o valor do atributo data-id
//     // $('span.nome').text(nome+ ' (id = ' +id+ ')'); // inserir na o nome na pergunta de confirmação dentro da modal
//     // $('a.delete-yes').attr('href', 'apagar.php?id=' +id); // mudar dinamicamente o link, href do botão confirmar da modal
//     $('#editEnviroment').modal('show'); // modal aparece
});


