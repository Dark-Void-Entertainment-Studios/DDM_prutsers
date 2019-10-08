@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body text-center">
                        <div class="imageContainer">
                            <img class="image rounded" src="img/aitsu.png" alt="">
                            <p class="overlay">
                                {{$dark->__get('name')}},
                                Level ({{$dark->__get('level')}}),
                                Hp ({{$dark->__get('hp')}}),
                                Attack ({{$dark->__get('atk')}}),
                                Defence ({{$dark->__get('def')}}),
                                Effect: {{$dark->__get('effect')}}
                            </p>
                        </div>

                        <div class="imageContainer">
                            <img class="image rounded" src="img/aromajar.png" alt="">
                            <p class="overlay">
                                {{$light->__get('name')}},
                                Level ({{$light->__get('level')}}),
                                Hp ({{$light->__get('hp')}}),
                                Attack ({{$light->__get('atk')}}),
                                Defence ({{$light->__get('def')}}),
                                Effect: {{$light->__get('effect')}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection