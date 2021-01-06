<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link  rel="stylesheet"  href="{{asset('css/app.css')}}">
        <link  rel="stylesheet"  href="{{asset('css/styles.css')}}">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="shortcut icon"/>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/flaticon.css"/>
        <link rel="stylesheet" href="css/owl.carousel.css"/>
        <link rel="stylesheet" href="css/style.css"/>
            <title>Document</title>
    </head>

    <body>
        @include('partials.header')
        @yield('content')
        @include('partials.footer')



        <script  src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/circle-progress.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
        <script src="js/map.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>