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
                <div class="form-check">
                    <input class="btn btn-default" type="checkbox" name="boardSize" value="1">
                    <label for="board">big board</label>
                </div>
                <div class="form-check">
                    <input class="btn btn-default" type="checkbox" name="obstacles" value="1">
                    <label for="board">obstacles</label>
                </div>
                <div class="form-group">
                    <label for="board">time</label>
                    <select class="form-control" name="time" id="time">
                        <option value="1">1 min</option>
                        <option value="2">2 min</option>
                        <option value="3">3 min</option>
                    </select>
                </div>
                    
                    <input class="btn btn-default" type="submit" value="Play">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
