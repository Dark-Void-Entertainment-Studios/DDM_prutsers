var game    = document.getElementById("game");
var board   = [[13, 19], [26, 19]];
var obstacles    = true;
var button  = document.getElementById("button");

/**
 * makeBoard
 * 
 * Makes the playboard and can be set to play with 2 or 4 players.
 * 
 * @param {*} a 
 */

function makeBoard(a, random) {
    for (var rowCount = 0; rowCount < board[a][0]; rowCount++) {
        var row = document.createElement("div");
        row.setAttribute("class", "row");
        for (var column = 0; column < board[a][1]; column++) {
            var square  = document.createElement("div");
            square.setAttribute("id", "square_" + rowCount + "_" + column);
            square.setAttribute("class", "square");
            square.style.border = "1.5px solid black";
            square.style.width  = "50px";
            square.style.height = "50px";
            square.style.cssFloat = "right";
            square.style.backgroundColor = "SaddleBrown ";
            row.appendChild(square);
        }
        game.appendChild(row);
        if (obstacles) {
            var b = randomSquare();
                while (b == 0 || b == 18 ) {
                    b = randomSquare();
                }
            var stone = document.getElementById("square_" + rowCount + "_" + b);
            stone.style.backgroundImage = "url('img/stone.jpg')";
            stone.style.backgroundSize  = "auto";
            stone.setAttribute("onclick", "alert('You cannot place it here!')");
        }
    }
}

function randomSquare() {
    var random = Math.floor(Math.random() * 19);
        return random;
}

function start() {
    makeBoard(0);
    button.style.display = "none";
}

(function init() {
    button.onclick = function(){start();};
})();
