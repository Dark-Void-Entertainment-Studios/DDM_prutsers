@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body text-center">
                        @foreach($monsters as $monster)
                        <div class="imageContainer">
                            <img class="image rounded" src="{{$monster->__get('imgPath')}}" alt="">
                            <p class="overlay">
                                {{$monster->__get('name')}},
                                Level ({{$monster->__get('level')}}),
                                Hp ({{$monster->__get('hp')}}),
                                Attack ({{$monster->__get('atk')}}),
                                Defence ({{$monster->__get('def')}}),
                                Effect: {{$monster->__get('effect')}}
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection