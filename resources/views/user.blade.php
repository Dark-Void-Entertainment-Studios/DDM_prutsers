@extends('layouts.app')
@section('content')

<p>username: {{ Auth::user()->name }}</p>
<p>E-mail: {{ Auth::user()->email }}</p>

@endsection