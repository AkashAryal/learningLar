@extends('layouts.basicHtml')
<!--extends or uses the layout 'basicHtml'-->
@section('content')
  <h1 style="padding-top: 10px">Contact</h1>
<!--double curly braces is shorthand for php tags and echo-->
  {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
      <!--label : html name, actual label -->
      {{Form::label('name', 'Name')}}
      {{Form::text('name', NULL, array('placeholder'=>'Username', 'class'=>'form-control'))}}
      <!--text: html name, default value, placeholder (prob ment for other stuff too)
    Can put NULL arry allows you put classes, ids, label names etc-->
    </div>
    <div class="form-group">
      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', NULL, array('placeholder'=>'Email', 'class'=>'form-control'))}}
    </div>
    <div class="form-group">
      {{Form::label('message', 'Message')}}
      {{Form::textarea('message', NULL, array('placeholder'=>'Message', 'class'=>'form-control'))}}
    </div>
    <div>
      {{Form::submit('Submit', array('class'=>'btn btn-primary'))}}
    </div>
  {!! Form::close() !!}
@endsection
