@extends('layouts.app')

@section('content')
    <div id="playboard" class="container">
        <p id="timer" class="row justify-content-center timer"><span class="minute">00</span>:<span class="second">10</span></p>
        <div class="control"></div>
        <div class="row justify-content-center">
            <aside id="left" class="col-md-1">
                <div id="player1"></div>
                <button id="endButton1">end turn</button>
            </aside>
            <div id="game" class="col-md-10">
                @foreach($board->getMatrix() as $rowKey => $row)
                    <div class="row" id="row_{{$rowKey}}">
                        @foreach($row as $tileKey => $tile)
                            <a class="boardSquare" id="square_{{$rowKey}}_{{$tileKey}}" onclick="selectTile()" ></a>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <aside id="right" class="col-md-1">
                <div id="player2"></div>
                <button id="endButton2">end turn</button>
            </aside>
        </div>
    </div>
    <p id="Tp">tijdelijke p</p>
    <button id="Tbtn">tijdelijke button!</button>
@endsection
