@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">admin board</div>
                    <a href={{route('admin.show', 1)}}>monster test</a>
                    <div class="card-body">
                        <table width="100%">
                            <tr>
                                <th>user</th>
                                <th>status</th>
                                <th>role</th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <th>{{$user->name}}</th>
                                    <th>W.I.P</th>
                                    <th>{{$user->checkRole()}}</th>
                                    @if($user["userRights"] == 1)
                                        <th>
                                            <form action="{{route('makeAdmin', $user->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <div class="col-auto">
                                                    <input type="submit" class="btn btn-primary" value="make user">
                                                </div>
                                            </form>
                                        </th>
                                    @else
                                        <th>
                                            <form action="{{route('makeAdmin', $user->id)}}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('PUT') }}
                                                <div class="col-auto">
                                                    <input type="submit" class="btn btn-primary" value="make admin">
                                                </div>
                                            </form>
                                        </th>
                                    @endif
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection