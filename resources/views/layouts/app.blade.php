<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .topnav {
            background-color: #6c6ade;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #ffffff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 18px;
        }
        .topnav a:link,
        .topnav a:visited,
        .topnav a:hover,
        .topnav a:active{
            color: #ffffff;
        }
    </style>
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
    <a href="/conferences" >Conferences</a>
    <a href="/table">About</a>


</div>
<div>
    @yield('content')

</div>
</body>
</html>

