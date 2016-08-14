<!DOCTYPE html>
<html ng-app="BakkerijApp">

<head>
    <title>Bakkerij vd Westen - Webshop</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Bitter&Open Sans&Oswald' rel='stylesheet' type='text/css'>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/mystyle.css') }}">

    <!-- JS Files -->
    <script type="text/javascript" src="{{ url('/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/js/bootstrap.min.js') }}"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
   
    <!-- include Angular Files -->
    <script src="{{ url('/js/controllers/mainCtrl.js') }}"></script> <!-- load our controller -->
    <script src="{{ url('/js/bakkerij.js') }}"></script> <!-- load our application -->

</head>

<body ng-controller="mainController">

    @include('partials.nav')

    @yield('header')

    @yield('news')

    @yield('sub-header')

    @yield('content')

    @yield('form-content')

    @yield('footer')
</body>
</html>