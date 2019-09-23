@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">admin board</div>

                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <th>user</th>
                                <th>status</th>
                                <th>role</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>W.I.P</th>
                                    <th>{{$user->checkRole()}}</th>
                                    <th><button>X</button></th>
                                    <th><button>X</button></th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection