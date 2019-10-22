@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-black-50">You can select your character here!</div>
                <!-- <a href="/home" class="btn btn-default">Select</a> -->
                <form action="/home" class="text-center">
                    @foreach($characters as $character)
                <div class="imageContainer mw-50">
                    <img src="{{$character->__get("imgPath")}}" class="image rounded">
                    <div class="overlay">{{$character->__get('name')}}</div>
                </div>
                    @endforeach
                    <input class="btn btn-default" type="submit" value="Select">
                </form>
        </div>
    </div>
</div>
@endsection
