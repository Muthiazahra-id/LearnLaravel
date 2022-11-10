<h1>KWU APP| @yield('title')</h1>
<nav>
    <ul>
         {{--http://localhost:800/home--}}
        <li><a href="{{ url('home')}}">Beranda</a></li>
        <li><a href="{{ url('about')}}">About</a></li>
        <li><a href="{{ url('contact')}}">Contact</a></li>
    </ul>
</nav>
<hr>
<div>
    @yield ('content')
</div>