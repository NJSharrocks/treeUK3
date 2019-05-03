<!--imports master layout including header and footer-->
@extends('layouts.master')
<!--creates section-->
@section('contact', 'Contact')
@section('content')
<!--places banner image-->
  <div class="background">
    <img class="banner" src="{{asset('/img/banner1.jpg')}}" alt="">
  </div>

  <!--creates the contact form. This will be formatted in the future to work
  by sending to an established treeUK email address-->
  <div class="form-box">
    <h1>Contact Us</h1>
    <form  method="post">
        <label for="name">Name</label>
        <input id="name" type="text" name="Name">

        <label for="email">Email</label>
        <input id="email" type="email" name="Email">

        <label for="message">Message</label>
        <textarea id="message" name="Message"></textarea>
      <input class="button-primary" type="submit" value="Submit" />
    </form>
  </div>
@endsection
