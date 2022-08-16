
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length;
for ( let i = 0; i< menuLength; i++){
  if(menuItem[i].href === currentLocation){
    menuItem[i].className="active"
}
}

function onClickMenu(){
	document.getElementById("menu").classList.toggle("change");
	document.getElementById("navigationMobile").classList.toggle("change");
	document.getElementById("menuBg").classList.toggle("changeBg")
}
