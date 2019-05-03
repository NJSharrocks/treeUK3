<!--master layout-->
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <!--yield allows each page's title to be created within their respective page views-->
    <title>@yield('title')</title>
    <!--imports style sheers and scripts-->
    <link rel="stylesheet" href="/css/app.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>
<!--places the header from the includes folder-->
<div class="container">
    <header class="row">
        @include('includes.header')
    </header>
<!--places the content that is created in each page's view-->
    <article class="row">
        @yield('content')
    </article>
<!--places the footer that is created in the includes folder-->
    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
<!--pulls in the required google map javascript api-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8qvjC56mFsNL90L2x_FLSuWOpbcvZm7w&callback=initMap"
type="text/javascript"></script>
</body>
</html>
