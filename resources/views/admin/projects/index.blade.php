<!--brings in the master layout which includes the header and footer elements-->
@extends('layouts.master')

<!--creates a new section-->
@section('project', 'Projects')
@section('content')

<!--This element shows the admin navigation include element if the user is authorised
to see it i.e. if they're an admin-->
@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan

<!--if there are any projects in the projects table database then the following
table will be created-->
  <h1>All Projects</h1>
  @if (isset ($projects))

      <table>
          <tr>
              <th>Landowner</th>
              <th>Date</th>
              <th>Time</th>
              <th>Location</th>
          </tr>
          <!--this loops through each project in the projects table and displays
          the respective elements in the columns allocated, creating an entire
          table of database information-->
          @foreach ($projects as $project)
              <tr>
                  <td>{{ $project->land_owners_username }}</td>
                  <td> {{ $project->event_date }}</td>
                  <td>{{ $project->event_time }}</td>
                  <td>{{ $project->location }}</td>
                  <!--creates an update link for each project-->
                  <td> <a href="projects/{{ $project->id }}/edit">Update</a></td>
                  <!--creates a delete button using the DELETE method, routing to the destroy part of the
                  controller which will delete that element from the database-->
                  <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['admin.projects.destroy', $project->id]]) !!}
                  {!! Form::submit('Delete') !!}
                  {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
      </table>
<!--if there are no projects in the database then No Projects will be displayed-->
  @else
      <p>No Projects</p>
  @endif
@endsection
