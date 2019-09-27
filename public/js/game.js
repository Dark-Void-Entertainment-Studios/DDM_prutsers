var game    = document.getElementById("game");
var board   = [[13, 19], [26, 19]];

/**
 * changeUrlParameters()
 * 
 * changes the Url hash into a boolean.
 */

function changeUrlParameters() {
    var hash = getUrlParameters();
    if (hash.boardSize == 1) {
        var a   = 1;
    } else {
        var a   = 0;
    }
    if (hash.obstacles == 1) {
        var obstacles   = true;
    } else {
        var obstacles   = false;
    }
    makeBoard(a, obstacles)
}

function getUrlParameters() {
    var pageParamString = unescape(window.location.search.substring(1));
    var paramsArray = pageParamString.split('&');
    var paramsHash = {};

    for (var i = 0; i < paramsArray.length; i++)
    {
        var singleParam = paramsArray[i].split('=');
        paramsHash[singleParam[0]] = singleParam[1];
    }
    console.log(paramsHash);
    return paramsHash;
}

/**
 * makeBoard()
 * 
 * Makes the playboard and can be set to play with 2 or 4 players.
 */

function makeBoard(a, obstacles) {
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
        addObstacles(rowCount, obstacles);
    }
}

/**
 * addObstacles
 * 
 * It adds obstacles to the board.
 */

function addObstacles(rowCount, obstacles) {
    if (obstacles) {
        var b = randomSquare();
            while (b == 0 || b == 18 ) {
                b = randomSquare();
            }
        var stone = document.getElementById("square_" + rowCount + "_" + b);
        stone.style.backgroundImage = "url('img/stone.jpg')";
        stone.style.backgroundSize  = "auto";
        stone.setAttribute("onclick", "alert('You cannot place a dice here!')");
    }
}

function randomSquare() {
    var random = Math.floor(Math.random() * 19);
        return random;
}
changeUrlParameters()
