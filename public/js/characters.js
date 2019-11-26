var idHealer = document.getElementById('select');
var character = document.querySelector('input[name="character"]');

document.getElementById(1).style.border = "2px solid lightblue";

function saveCharacter(key) {
	if (character.value != key) {
		document.getElementById(character.value).style.border = "";
	}
  	document.getElementById(key).style.border = "2px solid lightblue";
  	idHealer.value = key;
  	character.value = key;
}
