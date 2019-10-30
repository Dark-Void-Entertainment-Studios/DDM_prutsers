@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <section class="col-md-8">
                    <h3>Join game</h3>
                </section>
                <section class="col-md-8">
                    <h3>Lobbies</h3>
                </section>
                <section class="col-md-3">
                    <form action="/board">
                    <h3>Create game</h3>
                    <p>Settings:</p>
                <div class="form-check">
                    <input class="btn btn-default" type="checkbox" name="boardSize" value="1">
                    <label for="board">Bigger Board (19 by 26)</label>
                </div>
                <div class="form-check">
                    <input class="btn btn-default" type="checkbox" name="obstacles" value="1">
                    <label for="board">Obstacles</label>
                </div>
                    <label for="board">Buffertime</label>
                    <select class="form-control" name="buffer" id="buffer">
                        <option value="0">Off</option>
                        <option value="1">60 seconds</option>
                        <option value="2">120 seconds</option>
                        <option value="3">180 seconds</option>
                    </select>
                <div class="form-group">
                    <label for="board">Time</label>
                    <select class="form-control" name="time" id="time">
                        <option value="1">60 seconds</option>
                        <option value="2">120 seconds</option>
                        <option value="3">180 seconds</option>
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