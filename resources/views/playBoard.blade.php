@extends('layouts.app')

@section('content')
<div id="playboard" class="container">
    <p id="time" class="row justify-content-center timer"><span class="minute">00</span>:<span class="second">10</span></p>
    <p id="buffer" class="row justify-content-center timer"><span class="minute">00</span>:<span class="second">10</span></p>
        <div class="control">
        </div>
    <div class="row justify-content-center">
        <aside class="col-md-1">
            <div id="player1"></div>
            <button id="endButton1">END TURN</button>
        </aside>
        <div id="game" class="col-md-10">
            
        </div>
        <aside class="col-md-1">
            <div id="player2"></div>
            <button id="endButton2">END TURN</button>
        </aside>
    </div>
</div>
@endsection
