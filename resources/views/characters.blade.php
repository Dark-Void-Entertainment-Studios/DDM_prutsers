@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You can select your character here!</div>
                <!-- <a href="/home" class="btn btn-default">Select</a> -->
                <form action="/home" class="text-center">
                <div class="container">
                    <img src="img/Yuma Tsukumo.png" class="image rounded">
                    <div class="overlay">{{$characters[10]->name}}</div>
                </div>  
                <div class="container">
                    <img src="img/Artificial Intelligence (A.I.).png" class="image rounded">
                    <div class="overlay">{{$characters[0]->name}}</div>
                </div> 
                <div class="container"> 
                    <img src="img/Yugo.png" class="image rounded">
                    <div class="overlay">{{$characters[9]->name}}</div>
                </div>  
                <div class="container">
                    <img src="img/Z-one.png" class="image rounded">
                    <div class="overlay">{{$characters[13]->name}}</div>
                </div>  
                <div class="container">
                    <img src="img/Yugi Muto.png" class="image rounded">
                    <div class="overlay">{{$characters[8]->name}}</div>
                </div> 
                <div class="container"> 
                    <img src="img/Jaden Yuki.png" class="image rounded">
                    <div class="overlay">{{$characters[1]->name}}</div>
                </div>
                <div class="container"> 
                    <img src="img/Ruff Ruff McDogg.png" class="image rounded">
                    <div class="overlay">{{$characters[5]->name}}</div>
                </div> 
                <div class="container">
                    <img src="img/Maximillion Pegasus.png" class="image rounded">
                    <div class="overlay">{{$characters[4]->name}}</div>
                </div>  
                <div class="container">
                    <img src="img/Yusaku Fujiki.png" class="image rounded">
                    <div class="overlay">{{$characters[11]->name}}</div>
                </div>
                <div class="container"> 
                    <img src="img/Joey Wheeler.png" class="image rounded">
                    <div class="overlay">{{$characters[2]->name}}</div>
                </div>
                <div class="container"> 
                    <img src="img/Téa Gardner.png" class="image rounded">
                    <div class="overlay">{{$characters[7]->name}}</div>
                </div> 
                <div class="container"> 
                    <img src="img/Yusei Fudo.png" class="image rounded">
                    <div class="overlay">{{$characters[12]->name}}</div>
                </div> 
                <div class="container"> 
                    <img src="img/Seto Kaiba.png" class="image rounded">
                    <div class="overlay">{{$characters[6]->name}}</div>
                </div>
                <div class="container">
                    <img src="img/Mai Valentine.png" class="image rounded">
                    <div class="overlay">{{$characters[3]->name}}</div>
                </div> 
                    <input class="btn btn-default" type="submit" value="Select">
                </form>
        </div>
    </div>
</div>
@endsection
