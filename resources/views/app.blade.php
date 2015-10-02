<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
    <div class="header">
        <div class="container">
            <div class="title">E-System</div>
            @yield('header')
        </div>
    </div>
    <div class="menu">
        <div class="container">
            @yield('menu')
        </div>
    </div>
    <div class="body">
        <div class="container">
            @yield('content')
        </div>
    </div>
    <div class="footer">
        <div class="container">
            @yield('footer')

            <div class="footer-text">E-System@Corporation</div>
        </div>
    </div>

</body>
</html>
