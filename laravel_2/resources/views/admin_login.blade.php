<!DOCTYPE HTML>
<html>
<head>
    <title>Form Page</title>
    <link rel="stylesheet" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/parsley/css/parsley.css')}}">
    <script src="{{asset('public/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/parsley/js/parsley.min.js')}}"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-info col-md-6 col-md-offset-3" style="margin-top: 5%">
        @if(Session::has('exception'))
            <div class="alert alert-danger">{{Session::get('exception')}}</div>
        @endif
        <div class="panel-heading">
            <h3 style="text-align: center">Admin Login</h3>
        </div>
        <div class="panel-body">
            {{ Form::open(['url' => '/check', 'method' => 'post'])}}
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name:</label>
                {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                <label>Password:</label>
                {{Form::text('password',null,['class'=>'form-control'])}}
            </div>
            <input type="submit" class="btn btn-success btn-block" name="submit">
            {{ Form::close()}}
        </div>
    </div>
</div>
</body>
</html>