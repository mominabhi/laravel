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
    <div class="panel panel-info " style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">Registration List</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Action</th>
                </thead>
                <tbody>
                @foreach($Admins as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->id_num}}</td>
                    <td>
                        <a href="{{route('admin.edit',$admin->id)}}">
                            <button type="submit" class="btn">Edit</button>
                        </a>
                        <form method="post" action="{{route('admin.destroy',$admin->id)}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>

                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>