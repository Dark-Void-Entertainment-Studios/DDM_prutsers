@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <!-- <a href="/board" class="btn btn-default">Play</a> -->
                <form action="/board">
                    <input type="checkbox" value="1"><span>big board</span>
                    <input type="checkbox" value="0"><span>obstacles</span>
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
