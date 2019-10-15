@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body text-center">
                        @foreach($monsters as $key => $monster)
                            <a href="{{route('monster', $key)}}">
                                <div class="imageContainer">
                                    <img class="image rounded" src="{{$monster->__get('imgPath')}}" alt="">
                                    <p class="overlay">
                                        {{$monster->__get('name')}},
                                        Level ({{$monster->__get('level')}}),
                                        Hp ({{$monster->__get('hp')}}),
                                        Atk ({{$monster->__get('atk')}}),
                                        Def ({{$monster->__get('def')}}),
                                        Eff: {{$monster->__get('effect')}}
                                    </p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection