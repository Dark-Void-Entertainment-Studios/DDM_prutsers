@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">admin user edit</div>

                    <div class="card-body">
                        <form action="{{route('admin.update', ['id' => $user->id])}}">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection