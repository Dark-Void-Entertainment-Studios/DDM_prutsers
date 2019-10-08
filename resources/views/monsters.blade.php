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
                            <div>
                                {{$dark->__get('name')}}
                                {{$dark->__get('level')}}
                                {{$dark->__get('hp')}}
                                {{$dark->__get('atk')}}
                                {{$dark->__get('def')}}
                                {{$dark->__get('effect')}}
                            </div>

                        </div>

                        <div class="view overlay">
                            <img class="img-fluid "  src="img/aromajar.png" alt="">
                            <div class="mask flex-center rgba-red-strong">
                                {{$light->__get('name')}}
                                {{$light->__get('level')}}
                                {{$light->__get('hp')}}
                                {{$light->__get('atk')}}
                                {{$light->__get('def')}}
                                {{$light->__get('effect')}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection