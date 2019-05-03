<!--imports the master layout including the header and footer-->
@extends('layouts.master')
<!--creates a new section-->
@section('woodland', 'Woodlands')
@section('content')

<!--creates a container for the form and includes the title, Edit followed by the name
of the woodland that is being edited-->
<div class="loginForm">
<h1>Edit - {{ $woodland->name }}</h1>


<!--creates form that uses the PATCH method to edit the details of the woodlands in the database-->
{!! Form::model($woodland, ['method' => 'PATCH', 'url' => 'admin/woodlands/' . $woodland->id]) !!}
  {!! csrf_field() !!}
<!--label and input for the name element-->
  <div class="registerButton">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'large-8 columns']) !!}
  </div>
<!--label and input for the longitude_and_latitude element-->
  <div class="registerButton">
    {!! Form::label('longitude_and_latitude', 'Longitude and Latitude:') !!}
    {!! Form::text('longitude_and_latitude', null, ['class' => 'large-8 columns']) !!}
  </div>
<!--label and input for the description element-->
  <div class="registerButton">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'large-8 columns']) !!}
  </div>
<!--label and input for the facilities element-->
  <div class="registerButton">
    {!! Form::label('facilities', 'Facilities:') !!}
    {!! Form::text('facilities', null, ['class' => 'large-8 columns']) !!}
  </div>
<!--submit button to update woodland details-->
  <div class="registerButton">
    {!! Form::submit('Update Woodland') !!}
  </div>
{!! Form::close() !!}
</div>
@endsection
