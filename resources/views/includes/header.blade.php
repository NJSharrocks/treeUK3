<!--creates the header which will be called in the master layout-->
<header class="header">
<!--creates the text logo-->
  <a href="/" class="logo">treeUK</a>
<!--places the hamburger icon-->
  <input class="menu-btn" type="checkbox" id="menu-btn" />
  <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
<!--adds the nav elements-->
  <ul class="menu">
    <!--if the user is not logged in then it will display the login and register
    links-->
    @if (Auth::guest())
        <li><a href="{{ url('/login') }}">Login</a></li>
        <li><a href="{{ url('/register') }}">Register</a></li>
    <!--if the user is logged in then it will show their name which will link
    to their personal profile in future improvements but for now allows admins to access the
    administration page-->
    @else
    <li><a href="admin/">
      {{ Auth::user()->name }} - Admin
    </a></li>
    <!--allows the user to logout if they're currently logged in-->
    <li><a href="{{ url('/logout') }}">Logout</a></li>
    @endif
    <!--adds the links to different pages-->
    <li><a href="/woodlands">Find an Ancient Woodland</a></li>
    <li><a href="/project">Tree Plant Project</a></li>
    <li><a href="/about">About Us</a></li>
    <li><a href="/contact">Contact</a></li>

  </ul>
</header>
