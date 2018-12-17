@extends('layouts.app')
@section('title')
Dashboard
@endsection
@section('content')
<div class="jumbotron text-center">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">{{auth()->user()->verified() ? ' ' : 'Your account is not verified check your email to verify..'}} </p>
</div>
@endsection
