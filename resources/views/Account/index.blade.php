@extends('layouts.app')
@section('content')
<div class="col-12 pl-3 pr-3 ">
    <div class="card">
       <div class="card-header bg-white">
         Email : {{$user->email}}
       </div>
      <div class="card-body">
       Username : {{$user->name}}
      <div>
       Joined at {{date('M j, Y h:ia', strtotime($user->created_at ))}}
      </div>
      </div>
      <div class="card-footer bg-white">
       Last updated at {{date('M j, Y h:ia', strtotime($user->updated_at ))}}
      </div>
    </div>
  </div>
@endsection