<!DOCTYPE HTML>
<html>
<head>
    <title>Form Page</title>
    <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/font-awesome/css/font-awesome.min.css')}}">
    <script src="{{asset('public/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-info col-md-6 col-md-offset-3" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">Registration form</h3>
        </div>
        <p>whats Your name?</p>
        @yield('main_content')
    </div>
</div>
</body>
</html>