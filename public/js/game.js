var game    = document.getElementById("game");
var player1 = document.getElementById("player1");
var player2 = document.getElementById("player2");
var endButton1 = document.getElementById("endButton1");
var endButton2 = document.getElementById("endButton2");
var board   = [[13, 19], [26, 19]];
var players = [["player1", 3],["player2", 3]];
var turnCount = 0;
var timer;
var time;
var colourPlayer1 = "blue";
var colourPlayer2 = "red";
var player = 0;


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
            square.setAttribute("onclick", "selectTile(square_" + rowCount + "_" + column +")");
            square.setAttribute("class", "square");
            square.style.border = "1.5px solid black";
            square.style.width  = "50px";
            square.style.height = "50px";
            square.style.cssFloat = "right";
            square.style.backgroundColor = "SaddleBrown";
            row.appendChild(square);
        }
        game.appendChild(row);
        addObstacles(rowCount, obstacles); 
    }
    var centerRow = Math.floor(rowCount / 2);
    var startPlayer1 = document.getElementById("square_" + centerRow + "_0");
    var startPlayer2 = document.getElementById("square_" + centerRow + "_18");
    startPlayer1.style.backgroundColor = colourPlayer1;
    startPlayer2.style.backgroundColor = colourPlayer2;
    startPlayer1.setAttribute("onclick", "alert('https://www.youtube.com/watch?v=umDr0mPuyQc')");
    startPlayer2.setAttribute("onclick", "alert('https://www.youtube.com/watch?v=umDr0mPuyQc')");
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
        stone.style.backgroundImage = "url('img/stone.png')";
        stone.style.backgroundSize  = "auto";
        stone.setAttribute("onclick", "alert('You cannot place a dice here!')");
    }
}

function randomSquare() {
    var random = Math.floor(Math.random() * 19);
        return random;
}

function addPlayers() {
    var name = document.createElement("p");
    name.innerHTML = players[0][0];
    player1.appendChild(name);
    var name = document.createElement("p");
    name.innerHTML = players[1][0];
    player2.appendChild(name);
    startTurn();
}

function _timer(callback)
{
    var time = 0;     //  The default time of the timer
    var status = 0;    //    Status: timer is running or stoped
    var timer_id;    //    This is used by setInterval function
    
    // this will start the timer ex. start the timer with 1 second interval timer.start(1000) 
    this.start = function(interval)
    {
        interval = (typeof(interval) !== 'undefined') ? interval : 1000;
 
        if(status == 0)
        {
            status = 1;
            timer_id = setInterval(function()
            {
                if(time)
                {
                    time--;
                    generateTime();
                    if(typeof(callback) === 'function') callback(time);
                }
            }, interval);
        }
    }
    
    //  Same as the name, this will stop or pause the timer ex. timer.stop()
    this.stop =  function()
    {
        if(status == 1)
        {
            status = 0;
            clearInterval(timer_id);
        }
    }
    
    // Reset the timer to zero or reset it to your own custom time ex. reset to zero second timer.reset(0)
    this.reset =  function(sec)
    {
        sec = (typeof(sec) !== 'undefined') ? sec : 0;
        time = sec;
        generateTime(time);
    }
    
    // This methode will render the time variable to minute:second format
    function generateTime()
    {
        var second = time % 60;
        var minute = Math.floor(time / 60) % 60;
        
        second = (second < 10) ? '0'+second : second;
        minute = (minute < 0) ? '0'+minute : minute;
        
        $('p.timer span.second').html(second);
        $('p.timer span.minute').html(minute);
    }
}

function isOdd(num) {
    return num % 2;
}

function startTurn() {
    var hash = getUrlParameters();
    if (hash.time == 1) {
        var turnTime = 60;
    } else if (hash.time == 2) {
        var turnTime = 120;
    } else {
        var turnTime = 180;
    }
    endButton1.setAttribute("onclick", "timer.reset(1)");
    endButton2.setAttribute("onclick", "timer.reset(1)");
    endButton2.style.display = "none";
    var time = turnTime;
    $(document).ready(function(e) 
    {
        timer = new _timer
        (
            function(time)
            {
                var myTimer = document.getElementById("timer");
                if (time == 0) {
                    nextTurn();
                    timer.reset(turnTime);
                    myTimer.style.color = "white";
                    myTimer.style.fontWeight = "normal";
                    myTimer.style.fontSize = "14px";
                    turnCount++;
                } else if (time <= 10) {
                    myTimer.style.color = "red";
                    myTimer.style.fontWeight = "bold";
                    myTimer.style.fontSize = "22px";
                }
            }
        );
        timer.reset(time);
        timer.start(1000);
    });
}

function nextTurn() {
    if (isOdd(turnCount)) {
        endButton2.style.display = "none";
        endButton1.style.display = "inline";
        player = 0;
    } else {
        endButton1.style.display = "none";
        endButton2.style.display = "inline";
        player = 1;
    }
}

function selectTile(a){
    if (player != 1){
        $(document).ready(function(){
            $(a).hide();
        });
    } else {

    }
}

changeUrlParameters();
addPlayers();
