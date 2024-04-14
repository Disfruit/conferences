<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel project - @yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @section('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                flatpickr('.datepicker', {
                    dateFormat: 'Y-m-d' // Customize date format if needed
                });
            });
        </script>
    @endsection
</head>
<body>
<div class="topnav">
    <div class="links">
        <a href="/conferences">Conferences</a>
        <a href="/about">About</a>
    </div>
    <div class="logout-container">
        @guest
            <a href="{{route('login') }}" class="logout">Sign in</a>
        @else
            <a href="{{route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout">Sign out
                ({{auth()->user()->name}})</a>
            <form action="{{route('logout') }}" method="post" id="logout-form" class="d-none">
                @csrf
            </form>
        @endguest
    </div>
</div>
<div>
    @yield('content')
</div>
</body>
</html>
