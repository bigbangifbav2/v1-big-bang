var music = false;
function musica() {
	if (music == false) {
		enableMute();
		document.getElementById('imgSom').src="img/som_off.png";
		music = true;
	} else {
		disableMute();
		document.getElementById('imgSom').src="img/som_on.png";
		music = false;
	}
}

function enableMute() { 
	document.getElementById('bgsound').muted = true;

} 

function disableMute() { 
   document.getElementById('bgsound').muted = false;
}