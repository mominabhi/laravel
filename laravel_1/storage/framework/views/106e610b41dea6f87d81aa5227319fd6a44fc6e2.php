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
                <?php $__currentLoopData = $Admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($admin->name); ?></td>
                    <td><?php echo e($admin->email); ?></td>
                    <td><?php echo e($admin->id_num); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.edit',$admin->id)); ?>">
                            <button type="submit" class="btn">Edit</button>
                        </a>
                        <form method="post" action="<?php echo e(route('admin.destroy',$admin->id)); ?>">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete </button>
                        </form>

                    </td>
                </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>