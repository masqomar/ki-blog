<!-- Sidebar left -->
<nav id="sidebarleft" class="sidenav">
    <div id="dismiss">
        <i class="fas fa-times"></i>
    </div>
    @guest
    <div class="sidebar-header"></div>
    <ul class="list-unstyled components">
        <li>
            <a href="{{ route('login') }}"><i class="fas fa-home"></i>Login</a>
        </li>
        @if(user_registration())
        <li>
            <a href="{{ route('register') }}"><i class="fas fa-home"></i>Register</a>
        </li>
    </ul>
    @endif
    @else
    @auth
    <div class="sidebar-header">
        <h3>User Menu</h3>
    </div>
    <div class="sdprofile">
        <div class="sdp-left">
            <img src="{{asset('assets')}}/img/profile4.jpg" alt="profile">
        </div>
        <div class="sdp-right">
            <div class="sd-name">{{ Auth::user()->name }}</div>
            <div class="sd-status">{{ Auth::user()->mobile }}</div>
        </div>
    </div>
    <ul class="list-unstyled components">
        @can('view_backend')
        <li>
            <a href="{{ route('backend.dashboard') }}"><i class="fas fa-home"></i>Dashboard</a>
        </li>
        @endif
        @can('view_user_menu')
        <li>
            <a href="book_a_car.html"><i class="fas fa-car"></i>Book a car</a>
        </li>
                
        <li>
            <a href="#pagemyaccount" data-toggle="collapse" aria-expanded="false"><i class="fas fa-user"></i>My Account <span><i class="fas fa-caret-down"></i></span></a>
            <ul class="collapse collapsible-body" id="pagemyaccount">
                <li>
                    <a href="{{ route('frontend.users.profile', encode_id(auth()->user()->id)) }}">Profile</a>
                </li>
                <li>
                    <a href="{{ route('frontend.users.profileEdit', encode_id(auth()->user()->id)) }}">Settings</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#pagesubmenu" data-toggle="collapse" aria-expanded="false"><i class="fas fa-clone"></i>Pages <span><i class="fas fa-caret-down"></i></span></a>
            <ul class="collapse collapsible-body" id="pagesubmenu">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="car_list.html">Car list</a>
                </li>
                <li>
                    <a href="car_single.html">Car single</a>
                </li>
                <li>
                    <a href="feedback.html">Feedback</a>
                </li>
                <li>
                    <a href="setting.html">Setting</a>
                </li>
                <li>
                    <a href="gallery.html">Gallery</a>
                </li>
                <li>
                    <a href="news_list.html">News list</a>
                </li>
                <li>
                    <a href="news.html">News</a>
                </li>
                <li>
                    <a href="register.html">Register</a>
                </li>
                <li>
                    <a href="login.html">Login</a>
                </li>
                <li>
                    <a href="profile.html">Profile</a>
                </li>
                <li>
                    <a href="single_page.html">Single page</a>
                </li>
                <li>
                    <a href="404.html">404 error page</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#"><i class="fas fa-star"></i>Rate</a>
        </li>

        <li>
            <a href="feedback.html"><i class="fas fa-envelope"></i>Feedback</a>
        </li>
        @endif
        <li>
            <a href="#pagemybooking" data-toggle="collapse" aria-expanded="false"><i class="fas fa-receipt"></i>Language <span><i class="fas fa-caret-down"></i></span></a>
            <ul class="collapse collapsible-body" id="pagemybooking">
                @foreach(config('app.available_locales') as $locale_code => $locale_name)
                <li>
                    <a href="{{route('language.switch', $locale_code)}}"> {{ $locale_name }}</a>
                </li>
                @endforeach
            </ul>
        </li>

        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-exclamation-circle"></i>Logout</a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </ul>
    @endauth
    @endguest
</nav>
<!-- .Sidebar left -->
<!-- Sidebar right -->
<nav id="sidebarright" class="sidenav">
    <div id="dismiss">
        <i class="fas fa-times"></i>
    </div>
    <div class="sidebar-header">
        <h3>Notifications</h3>
    </div>
    <ul class="right-menu">

        <li class="right-menu-item">
            <a href="#">
                <i class="fas fa-envelope"></i>
                <div class="ntitle">Your transaction was successful</div>
                <div class="desc">lorem ipsum dolor sit amet...</div>
            </a>
        </li>
    </ul>
</nav>
<!-- .Sidebar right-->
<!-- Header  -->
<nav class="navbar navbar-expand-lg navbar-light bg-header">
    <div class="container-fluid">
        <button type="button" id="sidebarleftbutton" class="btn">
            <i class="fas fa-align-left"></i>
        </button>
        <div class="logo"></div>
        @auth
        <button type="button" id="sidebarrightbutton" class="btn">
            <div class="notif">
                <i class="fas fa-bell"></i>
                <i class="fas fa-circle "></i>
            </div>
        </button>
        @endauth
    </div>
</nav>
<!-- .Header  -->