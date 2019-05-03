<!--imports the master layout including the header and footer-->
@extends('layouts.master')
<!--creates new section-->
@section('woodlands', 'Woodlands')
@section('content')
<!--imports image as the banner-->
  <img class="adminBanner" src="{{asset('/img/banner1.jpg')}}" alt="">
<!--if an admin is logged in they can see the admin navigation-->
@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan
@endsection
