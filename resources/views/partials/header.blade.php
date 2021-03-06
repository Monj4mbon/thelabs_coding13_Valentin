<!-- Page Preloder -->
<div id="preloder">
  <div class="loader">
    <img src="img/logo.png" alt="">
    <h2>Loading.....</h2>
  </div>
</div>


<!-- Header section -->
<header class="header-section">
  <div class="logo">
    <img src="img/logo.png" alt=""><!-- Logo -->
  </div>
  <!-- Navigation -->
  <div class="responsive"><i class="fa fa-bars"></i></div>
  <nav>
    <ul class="menu-list">
      <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}/">Home</a></li>
      <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}">Services</a></li>
      <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{ url('/blog') }}">Blog</a></li>
      <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </nav>
</header>
<!-- Header section end -->