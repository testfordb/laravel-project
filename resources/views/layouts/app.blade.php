<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
    <title>MiDo</title>
</head>
<body>
    <div class="header" id="header">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">MiDo</a>
            <ul class="main-nav">
                <li><a href="{{ route('articles') }}">Articles</a></li>
                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                <li><a href="{{ route('features') }}">Features</a></li>
                <li><a href="#">Other Links</a>
                    <div class="mega-menu">
                        <div class="image">
                            <img src="{{ asset('Imgs/megamenu.png') }}" alt="">
                        </div>
                        <ul class="links">
                            <li><a href="{{ route('testimonials') }}"><i class="far fa-comments fa-fw"></i>Testimonials</a></li>
                            <li><a href="{{ route('team-members') }}"><i class="far fa-user fa-fw"></i>Team Members</a></li>
                            <li><a href="{{ route('services') }}"><i class="far fa-building fa-fw"></i>Services</a></li>
                            <li><a href="{{ route('skills') }}"><i class="far fa-check-circle fa-fw"></i>Our Skills</a></li>
                            <li><a href="{{ route('work-steps') }}"><i class="far fa-clipboard fa-fw"></i>How it works</a></li>
                        </ul>
                        <ul class="links">
                            <li><a href="{{ route('events') }}"><i class="far fa-calendar-alt fa-fw"></i>Events</a></li>
                            <li><a href="{{ route('pricing') }}"><i class="fas fa-server fa-fw"></i>Pricing Plans</a></li>
                            <li><a href="{{ route('videos') }}"><i class="far fa-play-circle fa-fw"></i>Top Videos</a></li>
                            <li><a href="{{ route('stats') }}"><i class="far fa-chart-bar fa-fw"></i>Stats</a></li>
                            <li><a href="{{ route('discount') }}"><i class="fas fa-percent fa-fw"></i>Request A Discount</a></li>
                        </ul>
                    </div>
                </li>
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </div>
    @yield('content')
    @include('footer')
</body>
</html>