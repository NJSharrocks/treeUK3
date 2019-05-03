<!--use the master layout including header and footer-->
@extends('layouts.master')
<!--create new section-->
@section('users', 'Users')
@section('content')
<!--make the title the name of the user whose profile is currently being shown-->
  <title>{{ $user->name }}</title>
</head>
<body>
<!--make the header the name of the user whose profile is currently being shown-->
  <h1>{{ $user->name }}</h1>

<!--show the email address for the current user. The table has been created
for further development where more profile details will be available for users-->
  <table>
    <tr>
      <th>E-mail</th>
    </tr>
    <tr>
      <td>{{ $user->email}}</td>
    </tr>
  </table>

@endsection
