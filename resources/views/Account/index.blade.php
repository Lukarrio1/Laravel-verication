@extends('layouts.app')
@section('content')
  <div class="jumbotron text-center">
        <h1 class="display-4">Hello,{{ Auth::user()->name }}</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
</div>
@endsection