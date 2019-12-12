@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card text-dark">
                    <h class="card-header">Dashboard</h>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                @foreach($monsters as $key => $monster)
                                    <td class="">
                                        <a href="{{route('monster', $key)}}">
                                            <div class="imageContainer">
                                                <img class="align-middle rounded mx-auto d-block" src="{{$monster->__get('imgPath')}}" alt="">
                                                <p class="overlay w-100">
                                                    {{$monster->__get('name')}},
                                                    Level ({{$monster->__get('level')}}),
                                                    Hp ({{$monster->__get('hp')}}),
                                                    Atk ({{$monster->__get('atk')}}),
                                                    Def ({{$monster->__get('def')}}),
                                                    Eff: {{$monster->__get('effect')}}
                                                </p>
                                            </div>
                                        </a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            @foreach($spells as $key => $spell)
                                <td class="">
                                    <a href="{{route('monster', 'spell' , $key)}}">
                                        <div class="imageContainer">
                                            <img class="align-middle rounded mx-auto d-block" src="https://cdn.pixabay.com/photo/2014/06/03/19/38/road-sign-361513_640.jpg" alt="">
                                            <p class="overlay w-100">
                                                {{$spell->__get('name')}},
                                                Level ({{$spell->__get('level')}}),
                                                Eff: {{$spell->__get('effect')}}
                                            </p>
                                        </div>
                                    </a>
                                </td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
