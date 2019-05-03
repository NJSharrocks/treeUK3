<!--imports the master layout including header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('woodland', 'Woodlands')
@section('content')
  <h1>Add Woodland</h1>
<!--creates the form and used the store element of the woodlands controller to
specify where data from this form will be stored-->
  {!! Form::open(array('action' => 'WoodlandsController@store', 'id' => 'createwoodlands')) !!}
    {!! csrf_field() !!}
<!--label and input for the name element-->
    <div>
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--label and input for the longitude_and_latitude element-->
    <div>
      {!! Form::label('longitude_and_latitude', 'Longitude and Latitude:') !!}
      {!! Form::text('longitude_and_latitude', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--label and input for the description element-->
    <div>
      {!! Form::label('description', 'Description:') !!}
      {!! Form::text('description', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--label and input for the facilities element-->
    <div>
      {!! Form::label('facilities', 'Facilities:') !!}
      {!! Form::text('facilities', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--submit button to add the details of the woodland-->
    <div>
      {!! Form::submit('Add Woodland') !!}
    </div>
  {!! Form::close() !!}
@endsection
