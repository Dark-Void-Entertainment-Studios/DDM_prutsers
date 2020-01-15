@extends('layouts.app')

@section('content')

<title>Dungeon Dice</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<ul class="flex-container">
    <li class="flex-item-3"><a href="/lobby">
        <input type="image" id="playGame" src="image/blue_eyes.png" alt="DDM" width="200px" height="200px">
    </a></li>
    </li>

    <li class="flex-item-1">       
        <div class="slideShow">
            <img class="slideImage" src="image/angela.png"> 
            <img class="slideImage" src="image/soon.png">
            <img class="slideImage" src="image/soon.png">
            <img class="slideImage" src="image/soon.png">
            <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
        </div>
    <li class="break"></li> <!-- breek de row -->
    <li class="flex-item-2">
        <p class="flex-text">There are over 500 different dice.
            Each die contains a monster. Dice are color coded to indicate the monster's type.  
            <span id="whiteText"> White are Spellcasters, </span>
            <span id="blueText"> Blue are Warriors, </span>
            <span id="yellowText"> Yellow are Undead, </span>
            <span id="greenText"> Green are Beasts, </span>
            <span id="redText"> Red are Dragons. </span>
            The exception are black dice, which contain special abilities.
            A black die with a red Summon Crest is called a rare black die. In addition to a monster, a rare black die contains a special square on the inside of one of its faces.
            Each die has a crest, on each face. The different types of crests are Summon, Movement, Magic, Attack, Defense and Trap.
            The number of Summon Crests on a die indicates the monster's Level.
            Level 1 monsters have four crests, Level 2 monsters have three crests.
            Level 3 monsters have two crests, Level 4 monsters have one crest.
            Some crests have a number inside them, indicating their amount.
            Monsters inside the dice have an ATK number, DEF number and some have special abilities.
        <a href="https://yugioh.fandom.com/wiki/Yu-Gi-Oh!_Dungeon_Dice_Monsters">more info</a>
        </p>
    </li>
    <li class="flex-item-1">
        <p class="flex-text">Setup
            Two to four people can play.[4]
            Each player has a dice pool of twelve dice.[1]
            Each player is represented by a Dungeon Master, which has three Life Points.[1]
            At the beginning of the game, each player has a dungeon consisting of four squares at opposite sides of the table.          Their Dungeon Masters are placed in their dungeons.[1]
            Each player starts with three randomly dispensed dice.[1]
            It is randomly determined who goes first.[4]
        </p>
    </li>
    <li class="flex-item-1">
        <p class="flex-text">Version <?php echo $data["2"]["tag"] ?></p>
        <p class="flex-text">info <?php echo $data["2"]["changes"] ?></p>
    </li>
</ul>
</div>
<script src="../public/js/slide.js"></script>

@endsection
