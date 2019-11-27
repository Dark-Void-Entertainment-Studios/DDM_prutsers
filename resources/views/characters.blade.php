@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="/board" class="text-center" name="players">
            <div class="row"><div class="col-sm" id="player1">Player 1: </div><div class="characterTitle col-sm">You can select your character here!</div><div class="col-sm" id="player2">Player 2: </div></div>
                    @foreach($characters as $character)
                <div class="imageContainer mw-50" onclick="saveCharacter({{$loop->iteration}})">
                    <img src="{{$character->__get("imgPath")}}" class="image rounded" id="{{$loop->iteration}}">
                    <div class="overlay" id="name{{$loop->iteration}}">{{$character->__get('name')}}</div>
                </div>
                    @endforeach
                    <input type="hidden" name="character1" value="1" id="select1">
                    <input type="hidden" name="character2" value="1" id="select2">
                </form>
                <input class="btn btn-default bg-light" onclick="launch()" value="Launch Game">
        </div>
    </div>
</div>
@endsection
