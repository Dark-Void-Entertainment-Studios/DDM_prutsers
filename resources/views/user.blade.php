@extends('layouts.app')
@section('content')

<section id="userInfo">
<h3>User info</h3>
<p>Username: {{ Auth::user()->name }}</p>
<p>E-mail: {{ Auth::user()->email }}</p>
<p>friends? if you have those</p>
</section>

<section id="rankings">
<h3>Rankings</h3>
<p>Global ranking</p>
<p>Friend ranking</p>
</section>

<section id="decks">
<h3>Decks</h3>
<p>insert deks here once they are made</p>
</section>

<section id="achievement">
<h3>Achievement</h3>
<p>Recent achievement</p>
<p>Achievements(medals)</p>
</section>

@endsection