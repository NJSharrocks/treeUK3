<!--imports master layout including header and footer-->
@extends('layouts.master')

<!--creates new section-->
@section('woodlands', 'Woodlands')
@section('content')

<!--places header-->
<h2>THE UK'S ANCIENT WOODLANDS</h2>
<!--places intro paragraph-->
<p>The UK's ancient woodlands are unique ecosystems, often being the home of endangered flora and fauna or else the site of
  cultural or historical interest. But they're also under threat. Find your closest ancient woodland using the treeUK map below,
  visit it and join the fight to save the UK's ancient woodlands!</p>

<!--places map container and iframe-->
<div class='mapContain'>
<iframe id="map" src="https://www.google.com/maps/d/u/0/embed?mid=1gmkg3TxoKFExZuPFUQlYXL2raXc90f-n&"></iframe>
</div>


<h1>All Woodlands</h1>
<!--if there are woodlands in the woodlands database then it displays that data in a table-->
@if (isset ($woodlands))

    <table>
        <tr>
          <!--table headings-->
            <th class="woodlandTable">Woodland</th>
            <th>Description</th>
            <th>Facilities</th>
            <th>Opens in Google Maps</th>
        </tr>
        <!--for each woodland database record show the following information in a table-->
        @foreach ($woodlands as $woodland)
            <tr>
              <!--woodland name-->
                <td>{{ $woodland->name }}</td>
              <!--woodland description-->
                <td> {{ $woodland->description }} </td>
              <!--woodland facilities-->
                <td> {{ $woodland->facilities }} </td>
              <!--directions to the woodland, which uses the database's longitude_and_latitude element and links to Google Maps-->
                <td> <a href="https://www.google.com/maps/dir//{{$woodland->longitude_and_latitude}}"><button class="signIn" onclick="mapChange()">Directions</button></a></td>
            </tr>
        @endforeach
    </table>
<!--if there are no woodlands then display this-->
@else
    <p>No woodlands</p>
@endif


@endsection
