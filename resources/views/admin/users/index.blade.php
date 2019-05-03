<!--brings in the master layout including header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('users', 'Users')
@section('content')
<!--imports the admin navigation include if the user is logged in and is an
admin-->
@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan

  <h1>All Users</h1>
<!--if there are users in the user database then show the following table-->
  @if (isset ($users))

      <table>
          <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Permissions</th>
          </tr>
        <!--for loop that goes over each user element and displays them in their
        respective columns in the table-->
          @foreach ($users as $user)
              <tr>
                <!--makes the user's name into a clickable link to click through to their
                show view which displays their information-->
                  <td><a href="/admin/users/{{ $user->id }}" name="{{ $user->name }}">{{ $user->name }}</a></td>
                  <td> {{ $user->email }}</td>
                  <td>
                      <ul>
                        <!--for loop which shows each role that each user has-->
                          @foreach($user->roles as $role)
                              <li>{{ $role->label }}</li>
                          @endforeach
                      </ul>
                  </td>
                  <!--create an update link to take the admin through to the edit blade
                  for each user-->
                  <td> <a href="users/{{ $user->id }}/edit">Update</a></td>
                  <!--creates the delete button using the DELETE method which will remove that
                  particular user from the database-->
                  <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['admin.users.destroy', $user->id]]) !!}
                  {!! Form::submit('Delete') !!}
                  {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
      </table>
  <!--if there are no users in the database then display no users-->
  @else
      <p>no users</p>
  @endif
@endsection
