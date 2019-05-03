<!--imports the master layout including the header and footer-->
@extends('layouts.master')

<!--creates new section-->
@section('woodlands', 'Woodlands')
@section('content')
<!--title and header uses the woodland name from the database-->
  <title>{{ $woodland->name }}</title>
</head>
<body>
  <h1>{{ $woodland->name }}</h1>
<!--a table is created showing the information for each woodland-->
  <table>
    <tr>
      <th>Longitude and Latitude</th>
      <th>Description</th>
      <th>Facilities</th>
    </tr>
    <tr>
      <td>{{ $woodland->longitude_and_latitude}}</td>
      <td>{{ $woodland->description}}</td>
      <td>{{ $woodland->facilities }}</td>
    </tr>
  </table>
@endsection
