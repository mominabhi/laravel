<!DOCTYPE HTML>
<html>
<head>
    <title>Form Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/parsley/css/parsley.css')); ?>">
    <script src="<?php echo e(asset('public/jquery/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('public/parsley/js/parsley.min.js')); ?>"></script>
</head>
<body>
<div class="container">
    <div class="panel panel-info col-md-6 col-md-offset-3" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">Registration form</h3>
        </div>
        <div class="panel-body">
            <?php echo e(Form::open(['route' => ['post.store'],'method'=>'POST','data-parsley-validate'=>''])); ?>

            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>Title:</label>
                <?php echo e(Form::text('title',null,['class'=>'form-control','required'=>'','maxlength'=>'255'])); ?>

            </div>
            <div class="form-group">
                <label>Body:</label>
                <?php echo e(Form::textarea('body',null,['class'=>'form-control','required'=>''])); ?>

            </div>
            <input type="submit" class="btn btn-success btn-block" name="submit">
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
</body>
</html>