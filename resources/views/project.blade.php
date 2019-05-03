<!--imports master layout including header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('project', 'Project')
@section('content')
<!--places banner image-->
  <div class="background">
    <img class="banner" src="{{asset('/img/banner7.jpg')}}" alt="">
  </div>
<!--creates new header and introduction text-->
  <div class="homeText">
    <h1>The Tree Plant Project</h1>
    <p>We're not just about saving ancient woodlands, we want to promote the planting of new native tree expanses.</p>
    <p>So whether you want people to help plant trees on your land or you're looking to give back to the Earth and take part in a planting event, then our Tree Plant Project is for you!</p>
  </div>
<!--creates the image links within a container to separate users from land owner and tree planter accounts-->
  <div class="columnImages">
    <a href="/landowner">
    <div class="columnImage imageCoverOne">
      <img class="imageCover" src="{{asset('/img/banner8.jpg')}}" alt="">
      <p class="centerText">Want volunteers to plant trees or hedges on your land? Create an event here.</p>
    </div>
    </a>

    <a href="/treeplanter">
      <div class="columnImage">
        <img class="imageCover" src="{{asset('/img/banner9.jpg')}}" alt="">
        <p class="centerText imageCoverTwo">Want an active day in nature, planting the next woodland? Sign up to an event here.</p>
      </div>
    </a>
  </div>

@endsection
