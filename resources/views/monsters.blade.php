@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-12">
                <div class="card text-dark">
                    <h2 class="card-title text-white p-2 title">Monsters</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            @foreach($monsters as $key => $monster)
                                <td class="">
                                    <a href="{{route('monster', $key)}}">
                                        <div class="imageContainer">
                                            <img class="rounded width" src="{{$monster->__get('imgPath')}}" alt="">
                                            <p class="overlay w-75">
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
                <br>
                <div class="card text-dark">
                    <h2 class="card-title text-white p-2 title">Spells</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            @foreach($spells as $key => $spell)
                                <td class="">
                                    <p>
                                        <div class="imageContainer">
                                            <img class="rounded width" src="{{$spell->__get('imgPath')}}" alt="">
                                        </div>
                                    </p>
                                </td>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <div class="card text-dark">
                    <h2 class="card-title text-white p-2 title">Traps</h2>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            @foreach($traps as $key => $trap)
                                <td class="">
                                    <p>
                                        <div class="imageContainer">
                                            <img class="rounded width" src="{{$trap->__get('imgPath')}}" alt="">
                                        </div>
                                    </p>
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