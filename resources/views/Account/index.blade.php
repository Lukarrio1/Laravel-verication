@extends('layouts.app')
@section('content')
  
<div class="col-12 pl-3 pr-3 ">
  <div class="card">
    <div class="card-header bg-white">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
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