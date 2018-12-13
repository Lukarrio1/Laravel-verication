@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger text-center  col-lg-8 offset-lg-2 col-xs-12">
{{ $error }}
</div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success text-center  col-lg-8 offset-lg-2 col-xs-12" >
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger text-center  col-lg-8 offset-lg-2 col-xs-12" >
    {{ session('error') }}
</div>
@endif