@extends('layouts.app')

@section('content')
<div class="container">
    <p id="time" class="row justify-content-center timer"><span class="minute">00</span>:<span class="second">10</span></p>
        <div class="control">
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