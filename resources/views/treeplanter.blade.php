<!--imports the master layout including header and footer-->
@extends('layouts.master')

<!--creates new section-->
@section('treeplanter', 'Tree Planter')
@section('content')
<!--places banner image-->
    <img class="banner" src="{{asset('/img/banner2.jpg')}}" alt="">

<!--places header and subheader text-->
<div class="homeText">
  <h1>The UK's Ancient Woodlands</h1>
  <h5>They've been around for centuries but these areas of outstanding natural beauty are under threat.</h5>
  <h5>Visit one near you today and help save this unique landscape!</p>
</div>

<!--table showing all current available projects-->
<table>
    <tr>
        <th>Landowner</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
    </tr>
    <!--imports data for each project in the project database-->
    @foreach ($projects as $project)
        <tr>
            <td>{{ $project->land_owners_username }}</td>
            <td> {{ $project->event_date }}</td>
            <td>{{ $project->event_time }}</td>
            <td>{{ $project->location }}</td>
            <!--creates attending button next to each project for the user to indicate they are
            attending that particular project event-->
            <td><button class="signIn attendingButton" type="button">Attending</button></td>

        </tr>
    @endforeach
</table>

@endsection
