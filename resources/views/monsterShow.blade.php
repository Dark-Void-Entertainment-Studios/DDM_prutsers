@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-dark">
                <h2 class="card-title text-white p-2 title">{{$monster->__get('name')}}</h2>
                <div class="card-body">
                    <img class="image rounded" src="../{{$monster->__get('imgPath')}}" alt="">
                    <p>Level: {{$monster->__get('level')}}</p>
                    <p>Health points: {{$monster->__get('hp')}}</p>
                    <p>Attack: {{$monster->__get('atk')}}</p>
                    <p>Defence: {{$monster->__get('def')}}</p>
                    <p>Effect: {{$monster->__get('effect')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection