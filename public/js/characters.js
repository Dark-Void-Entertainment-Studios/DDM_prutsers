var p1 = document.getElementById('player1');
var p2 = document.getElementById('player2');
var player = 'player1';
var s1 = document.getElementById('select1');
var s2 = document.getElementById('select2');

function saveCharacter(key) {
  	if (player == 'player1') {
  		if (document.getElementById(s1.value).classList.contains('player1')){
    		document.getElementById(s1.value).classList.remove('player1');
		} else if (document.getElementById(s1.value).classList.contains('playerBoth')){
    		document.getElementById(s1.value).classList.remove('playerBoth');
    		document.getElementById(s1.value).classList.add('player2');
		}
  		s1.value = key;
  		if (document.getElementById(key).classList.contains('player2')){
  			document.getElementById(key).classList.remove('player2');
  			document.getElementById(key).classList.add('playerBoth');
  		} else {
  			document.getElementById(key).classList.add('player1');
  		}
  		p1.innerHTML = 'Player 1: ' + document.getElementById('name' + key).innerHTML;
  		player = 'player2';
  	} else if(player == 'player2') {
  		if (document.getElementById(s2.value).classList.contains('player2')){
    		document.getElementById(s2.value).classList.remove('player2');
		} else if (document.getElementById(s2.value).classList.contains('playerBoth')){
    		document.getElementById(s2.value).classList.remove('playerBoth');
    		document.getElementById(s2.value).classList.add('player1');
		}
  		s2.value = key;
  		if(document.getElementById(key).classList.contains('player1')){
  			document.getElementById(key).classList.remove('player1');
  			document.getElementById(key).classList.add('playerBoth');
  		} else {
  			document.getElementById(key).classList.add('player2');
  		}
  		p2.innerHTML = 'Player 2: ' + document.getElementById('name' + key).innerHTML;
  		player = 'player1';
  	}
}

function launch() {
	document.forms['players'].submit();
}

(function(){
	document.getElementById(1).classList.add('playerBoth');
	p1.innerHTML = 'Player 1: ' + document.getElementById('name1').innerHTML;
	p2.innerHTML = 'Player 2: ' + document.getElementById('name1').innerHTML;
})();