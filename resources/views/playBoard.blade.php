@extends('layouts.app')

@section('content')
<div id="playboard" class="container">
    <p id="timer" class="row justify-content-center timer"><span class="minute">00</span>:<span class="second">10</span></p>
        <div class="control">
        </div>
    <div class="row justify-content-center">
        <aside id="left" class="col-md-1">
            <div id="player1"></div>
            <button id="endButton1">end turn</button>
        </aside>
        <div id="game" class="col-md-10"></div>
        <aside id="right" class="col-md-1">
            <div id="player2"></div>
            <button id="endButton2">end turn</button>
        </aside>
    </div>
</div>
@endsection
