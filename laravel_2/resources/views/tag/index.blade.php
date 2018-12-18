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
    <div class="panel panel-info col-md-6" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">list</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>TagNAME</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-info col-md-4 col-md-offset-1" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">Registration form</h3>
        </div>
        <div class="panel-body">

            {{ Form::open(['route' => ['tag.store'],'method'=>'POST'])}}
            {{ csrf_field() }}
            <div class="form-group">
                <label>Name:</label>
                {{Form::text('name',null,['class'=>'form-control'])}}
            </div>
            <input type="submit" class="btn btn-success btn-block" name="submit">
            {{ Form::close()}}
        </div>
    </div>

</div>
</body>
</html>