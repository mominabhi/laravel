<!DOCTYPE HTML>
<html>
<head>
    <title>Form Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/font-awesome/css/font-awesome.min.css')); ?>">
    <script src="<?php echo e(asset('public/jquery/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/bootstrap/js/bootstrap.min.js')); ?>"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-info col-md-6 col-md-offset-3" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">Registration form</h3>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo e(route('post.formSubmit')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Tag:</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" name="description"></textarea>
                </div>
                <input type="submit" class="btn btn-success btn-block" name="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html>