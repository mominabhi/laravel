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
    <div class="panel panel-info col-md-8 col-md-offset-2" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">list</h3>
        </div>
        <div class="panel-body">
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Tag</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post['title']}}</td>
                        <td>{{$post->tag}}</td>
                        <td>{{$post['description']}}</td>
                        <td>
                            {{--<a href="{{URL::to('posts/edits/'.$post->id)}}">--}}
                                {{--<button type="submit" class="btn btn-warning">Edit</button>--}}
                            {{--</a>--}}
                        <a href="{{ route('post.edit',$post['id'])}}">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </a>
                        </td>
                        <td>
                            <a href="{{URL::to('posts/deletePost/'.$post->id)}}">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </a>
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