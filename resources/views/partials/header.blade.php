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
      @foreach ($navbarData as $navbar)
        @if ($navbar->view == 'Home')
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}/">{{$navbar->name}}</a></li>
        @elseif ($navbar->view == 'Services')
          <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="{{ url('/services') }}">{{$navbar->name}}</a></li>
        @elseif ($navbar->view == 'Blog')
          <li class="{{ Request::is('blog') ? 'active' : '' }}"><a href="{{ url('/blog') }}">{{$navbar->name}}</a></li>
        @elseif ($navbar->view == 'Contact')
          <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ url('/contact') }}">{{$navbar->name}}</a></li>
        @endif
      @endforeach
    </ul>
  </nav>
</header>
<!-- Header section end -->