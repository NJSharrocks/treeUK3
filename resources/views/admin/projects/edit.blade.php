<!--brings in the master layout which includes the header and footer elements-->
@extends('layouts.master')

<!--creates a new section and gives it the title of Projects-->
@section('projects', 'Projects')
@section('content')

<!--creates the container then adds a title to the page which will be
Edit followed by the land_owners_username element of the project that is
being changed-->
<div class="loginForm">
  <h1 class="top">Edit - {{ $project->land_owners_username }}</h1>


  <!--this is the form element. The project model is called in here which allows
  editing of the selected project element in the database using the PATCH method.
  This then redirects back to the projects page upon submitting-->
  {!! Form::model($project, ['method' => 'PATCH', 'url' => 'admin/projects/' . $project->id]) !!}

<!--form label and input for the land_owners_username element-->
  <div class="registerButton">
      {!! Form::label('land_owners_username', 'Landowner:') !!}
      {!! Form::text('land_owners_username', null) !!}
  </div>

<!--form label and input for the event_date element-->
  <div class="registerButton">
      {!! Form::label('event_date', 'Date:') !!}
      {!! Form::text('event_date', null) !!}
  </div>
<!--form label and input for the event_time element-->
  <div class="registerButton">
      {!! Form::label('event_time', 'Time:') !!}
      {!! Form::text('event_time', null) !!}
  </div>
<!--form label and input for the location element-->
  <div class="registerButton">
      {!! Form::label('location', 'Location:') !!}
      {!! Form::text('location', null) !!}
  </div>
<!--submission button at the bottom of the form-->
  <div class="registerButton">
      {!! Form::submit('Update Project')!!}
  </div>


  {!! Form::close() !!}
</div>

@endsection
