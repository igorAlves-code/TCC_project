// const home = document.getElementById('home').getAttribute('class');
const home = document.querySelector('#home');

function onClickMenu() {
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("navigationMobile").classList.toggle("change");
	document.getElementById("menuBg").classList.toggle("changeBg");
}

