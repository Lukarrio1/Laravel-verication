@extends('layouts.app')
@section('content')
  <div class="jumbotron text-center">
        <h1 class="display-4">Hello,{{ Auth::user()->name }}</h1>
        <p class="lead">This is the account page..</p>
</div>
<div class="col-12 pl-3 pr-3 ">
  <div class="card">
    <div class="card-header bg-white">
      Dashboard
    </div>
    <div class="card-body">
      this is the card body.
    </div> 
    <div class="card-footer bg-white">
      this is the card footer
    </div>
  </div>
</div>
@endsection