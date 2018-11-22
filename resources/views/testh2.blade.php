@extends('layouts.app')

@section('content')
@if (Auth::check())
<div class="container">
<div class="jumbotron text-center">
  <div class="container">
    <h1>Welcome {{ Auth::user()->name }}!</h1>
  </div>
</div>
</div>
@endif
@endsection
