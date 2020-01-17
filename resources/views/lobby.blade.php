@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <section class="col-md-8">
                <h3>join</h3>
            </section>
            <section class="col-md-8">
            <h3>lobbies</h3>
            </section>
            <section class="col-md-3">
            <form action="/characters" method="post">
            @csrf
            <h3>create</h3>
            <p>options:</p>
                <div class="form-check">
                    <input type="hidden" name="boardSize" value="0">
                    <input class="btn btn-default" type="checkbox" name="boardSize" value="1">
                    <label for="board">big board</label>
                </div>
                <div class="form-check">
                    <input type="hidden" name="obstacles" value="0">
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
                    <input class="btn btn-default bg-light" type="submit" value="Play">
            </form>
            </section>
            </div>
        </div>
    </div>
</div>
@endsection