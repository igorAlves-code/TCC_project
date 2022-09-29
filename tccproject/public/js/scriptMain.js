const home = document.getElementById('home').getAttribute('class');

function onClickMenu() {
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("navigationMobile").classList.toggle("change");
	document.getElementById("menuBg").classList.toggle("changeBg");
}

/* Verificação de tipo de login, talvez aqui ou diretamente na tela de login
-Baseado nessa verificação, será determinada qual aba aparecerá aos professores e coordenadores
*/
