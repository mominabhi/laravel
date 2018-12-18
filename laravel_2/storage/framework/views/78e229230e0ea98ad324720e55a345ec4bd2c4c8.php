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
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tag->id); ?></td>
                        <td><?php echo e($tag->name); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="panel panel-info col-md-4 col-md-offset-1" style="margin-top: 5%">
        <div class="panel-heading">
            <h3 style="text-align: center">Registration form</h3>
        </div>
        <div class="panel-body">

            <?php echo e(Form::open(['route' => ['tag.store'],'method'=>'POST'])); ?>

            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>Name:</label>
                <?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

            </div>
            <input type="submit" class="btn btn-success btn-block" name="submit">
            <?php echo e(Form::close()); ?>

        </div>
    </div>

</div>
</body>
</html>