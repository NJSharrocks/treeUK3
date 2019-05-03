<!--imports master layout including header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('contact', 'Contact')
@section('content')
<!--places banner image-->
    <img class="banner" src="{{asset('/img/banner2.jpg')}}" alt="">
<!--creates header and subheader-->
<div class="homeText">
  <h1>Create a Tree Plant Event</h1>
  <h5>Do you want to own the next Great British woodland? Create an event for volunteers to plant native trees on your land.</h5>
  <h5>Upon creation, treeUK staff will be in touch to discuss the project (proof of land ownership required).</p>
</div>
<!--creates a form that stores to the project database table. This allows land owner accounts
to create a new project-->
{!! Form::open(array('action' => 'ProjectAdminController@store', 'id' => 'createproject')) !!}
<!--label and input for the land_owners_username element-->
    <div class="row large-12 columns">
        {!! Form::label('land_owners_username', 'Name:') !!}
        {!! Form::text('land_owners_username', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--label and input for the event_date element-->
    <div class="row large-12 columns">
        {!! Form::label('event_date', 'Date:') !!}
        {!! Form::text('event_date', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--label and input for the event_time element-->
    <div class="row large-12 columns">
        {!! Form::label('event_time', 'Time:') !!}
        {!! Form::text('event_time', null, ['class' => 'large-8 columns']) !!}
    </div>
<!--label and input for the location element-->
    <div class="row large-12 columns">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location', null, ['class' => 'large-8 columns']) !!}
    </div>

<!--submit button which adds the project event-->
    <div class="row large-4 columns">
        {!! Form::submit('Add Event', ['class' => 'signIn']) !!}
    </div>
{!! Form::close() !!}

@endsection
