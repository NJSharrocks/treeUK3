<!--imports the master layout including header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('home', 'Home')
@section('content')
<!--places banner image-->
    <img class="banner" src="{{asset('/img/banner3.jpg')}}" alt="">

<!--creates header and subheader text-->
<div class="homeText">
  <h1>The UK's Ancient Woodlands</h1>
  <p>They've been around for centuries but these areas of outstanding natural beauty are under threat.</p>
  <p>Visit one near you today and help save this unique landscape!</p>
</div>

<!--creates the container div for the image links-->
<div class="columnImages">
<!--the first image links to the woodlands map page-->
  <a href="/woodlands">
  <div class="columnImage imageCoverOne">
    <img class="imageCover" src="{{asset('/img/banner4.jpg')}}" alt="">
    <p class="centerText">Visit an ancient woodland</p>
  </div>
  </a>
<!--the second image links to the project page-->
  <a href="/project">
    <div class="columnImage">
      <img class="imageCover" src="{{asset('/img/banner2.jpg')}}" alt="">
      <p class="centerText imageCoverTwo">Tree Plant Project</p>
    </div>
  </a>
</div>


@endsection
