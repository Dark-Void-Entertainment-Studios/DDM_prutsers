@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card text-dark">
                    <h class="card-header">Monsters</h>
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
                </div>
            </div>
        </div>
    </div>
@endsection