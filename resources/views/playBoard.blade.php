@extends('layouts.app')

@section('content')
<div class="container">
    <!-- <p id="time" class="row justify-content-center" data=""></p> -->
    <div class="timer">
            <span class="minute">00</span>:<span class="second">10</span>
        </div>
        <div class="control">
            <button onClick="timer.reset(1)">Reset</button>
        </div>
    <div class="row justify-content-center">
        <aside class="col-md-1">
            <div id="player1"></div>
        </aside>
        <div id="game" class="col-md-10">
            
        </div>
        <aside class="col-md-1">
            <div id="player2"></div>
        </aside>
    </div>
</div>
@endsection
