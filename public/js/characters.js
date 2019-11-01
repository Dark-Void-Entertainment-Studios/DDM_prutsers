var idHealer = document.getElementById('select');

function saveCharacter(key) {
  document.getElementById(key).style = "border: 2px solid lightblue";
  idHealer.value = key;
}
