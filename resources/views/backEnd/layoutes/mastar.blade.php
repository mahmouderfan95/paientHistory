<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="icon" href="{{url('imgs/Favicon.svg')}}" type="image/png">
        <link rel="stylesheet" href="{{url('css/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('css/hover-min.css')}}">
        <link rel="stylesheet" href="{{url('css/animate.css')}}">
        <link rel="stylesheet" href="{{url('css/all.min.css')}}">
        {{-- <link href="https://fonts.googleapis.com/css?family=Chewy|Covered+By+Your+Grace&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Ma+Shan+Zheng|Roboto+Condensed|Sniglet&display=swap" rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{url('css/semantic.min.css')}}">
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('../css/argon.min.css?v=1.2.0')}}" type="text/css">
        <link rel="stylesheet" href="{{url('../css/styleProfile.css')}}" type="text/css">
        <link rel="stylesheet" href="{{url('../css/styleRideo.css')}}" type="text/css">
    </head>
    <body class="bg-About">

        <div class="main">
            @yield('content')
        </div>
        <!-- scripts -->
        <script src="{{url('js/jquery-3.4.1.js')}}"></script>
        <script src="{{url('js/popper.js')}}"></script>
        <script src="{{url('js/bootstrap.js')}}"></script>
        <script src="{{url('js/lib/js.cookie.js')}}"></script>
        <script src="{{url('js/lib/jquery.scrollbar.min.js')}}"></script>
        <script src="{{url('js/lib/jquery-scrollLock.min.js')}}"></script>
        <!-- main JS -->
        <script src="{{url('js/semantic.min.js')}}"></script>
        <script src="{{url('js/lib/argon.min.js?v=1.2.0')}}"></script>
        <script src="{{url('js/wow.min.js')}}"></script>
        <script>new WOW().init();</script>

        <script src="{{url('js/main.js')}}"></script>
        <script src="{{url('js/typed.js')}}"></script>
        {{-- <script>
        </script> --}}
        <!-- scripts -->
    </body>


</html>
