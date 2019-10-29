@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <form action="/board" class="text-center">
                <p class="characterTitle">You can select your character here!
                <input class="btn btn-default bg-light" type="submit" value="Play"></p>
                    @foreach($characters as $key => $character)
                <div class="imageContainer mw-50">
                    <img src="{{$character->__get("imgPath")}}" class="image rounded" onclick="saveCharacter({{$key}})">
                    <div class="overlay">{{$character->__get('name')}}</div>
                </div>
                    @endforeach
                    <input type="hidden" name="character" value="" id="select">
                </form>
        </div>
    </div>
</div>
@endsection
