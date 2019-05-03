<!--imports master layout including the header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('woodland', 'Woodlands')
@section('content')

<!--shows admin navigation if the user is an admin-->
@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan
<!--creates a button to add a woodland using the Woodlands Controller-->
  <h1>All Woodlands</h1>
  {{ Form::open(array('action' => 'WoodlandsController@create', 'method' => 'get')) }}
      <div class="signIn">
          {!! Form::submit('Add Woodland') !!}
      </div>
  {{ Form::close() }}
<!--if there's woodlands in the woodlands database then display the information
in the table set out below-->
  @if (isset ($woodlands))

      <table>
          <tr>
              <th>Woodland</th>
              <th>Longitude & Latitude</th>
              <th>Description</th>
              <th>Facilities</th>
          </tr>
          <!--for loop to display each woodland element in their respective columns-->
          @foreach ($woodlands as $woodland)
              <tr>
                <!--displays woodland name that is clickable to take the user to the woodland profile show view-->
                  <td><a href="/admin/woodlands/{{ $woodland->id }}" name="{{ $woodland->name }}">{{ $woodland->name }}</a></td>
                  <td> {{ $woodland->longitude_and_latitude }}</td>
                  <td> {{ $woodland->description }} </td>
                  <td> {{ $woodland->facilities }} </td>
                  <!--update link to allow editing of the woodland-->
                  <td> <a href="woodlands/{{ $woodland->id }}/edit">Update</a></td>
                  <!--delete button that allows removal of a database record using the DELETE method-->
                  <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['admin.woodlands.destroy', $woodland->id]]) !!}
                  {!! Form::submit('Delete') !!}
                  {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
      </table>
<!--if there is no woodland in the database then display No woodlands-->
  @else
      <p>No woodlands</p>
  @endif
@endsection
