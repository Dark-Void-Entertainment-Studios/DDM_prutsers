var game    = document.getElementById("game");
var board   = [[13, 19], [26, 19]];
var button  = document.getElementById("button");

/**
 * makeBoard
 * 
 * Makes the playboard and can be set to play with 2 or 4 players.
 * 
 * @param {*} a 
 */

function makeBoard(a) {
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
            row.appendChild(square);
        }
        game.appendChild(row);
    }
}
function start() {
    makeBoard(0);
    button.style.display = "none";
}
(function init() {
    button.onclick = function(){start();};
})();
