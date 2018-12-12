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
            <?php if(!empty($Admin)): ?>
                <?php echo e(Form::model($Admin, ['route' => ['admin.update', $Admin->id],'method'=>'PATCH'])); ?>

            <?php else: ?>
                <?php echo e(Form::open(['route' => ['admin.store'],'method'=>'POST'])); ?>

            <?php endif; ?>
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label>Name:</label>
                <?php echo e(Form::text('name',null,['class'=>'form-control'])); ?>

            </div>
            <div class="form-group">
                <label>Email:</label>
                <?php echo e(Form::email('email',null,['class'=>'form-control'])); ?>

            </div>
            <div class="form-group">
                <label>ID Number:</label>
                <?php echo e(Form::number('id_num',null,['class'=>'form-control'])); ?>

            </div>
            <input type="submit" class="btn btn-success btn-block" name="submit">
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>
</body>
</html>