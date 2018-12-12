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
        <div class="panel-body">
            {{ Form::open(['route' => ['admin.store'],'method'=>'POST'])}}
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control" value="{{$Admin->name}}">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="Email" name="email" class="form-control" value="{{$Admin->email}}">
            </div>
            <div class="form-group">
                <label>ID Number:</label>
                <input type="number" name="id_num" class="form-control" value="{{$Admin->id_num}}">
            </div>
            <input type="submit" class="btn btn-success btn-block" name="submit">
            {{ Form::close()}}
        </div>
    </div>
</div>
</body>
</html>