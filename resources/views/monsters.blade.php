@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <div class="container">
                            <img src="img/aitsu.png" alt="">
                            {{$dark->__get('name')}}
                        </div>

                        <div class="container">
                            <img src="img/aromajar.png" alt="">
                            {{$light->__get('name')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection