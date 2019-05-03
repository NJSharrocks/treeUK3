<!--brings in the master layout including header and footer-->
@extends('layouts.master')

<!--creates new section-->
@section('users', 'Users')
@section('content')
<!--creates a form and titles it with Edit and the particular user's name-->
<div class="loginForm">
  <h1 class="top">Edit - {{ $user->name }}</h1>


<!--edit form is created using the PATCH method which stores updated data to the user database-->
  {!! Form::model($user, ['method' => 'PATCH', 'url' => '/admin/users/' . $user->id]) !!}

<!--label and input for the name element-->
  <div class="registerButton">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null) !!}
  </div>
<!--label and input for the email element-->
  <div class="registerButton">
      {!! Form::label('email', 'Email Address:') !!}
      {!! Form::text('email', null) !!}
  </div>
<!--label and input for the roles element. This is a series of checkboxes and brings in the
different roles from the roles database table-->
  <div class="registerButton">
      {!! Form::label('roles', 'Roles:') !!}
      @foreach($roles as $role)
          {{ Form::label($role->name) }}
          {{ Form::checkbox('role[]', $role->id, $user->roles->contains($role->id), ['id' => $role->id]) }}
      @endforeach

  </div>
<!--form submission button-->
  <div class="registerButton">
      {!! Form::submit('Update User and Roles')!!}
  </div>


  {!! Form::close() !!}
</div>
@endsection
