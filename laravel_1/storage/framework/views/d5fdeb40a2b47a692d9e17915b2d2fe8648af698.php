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
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($post['title']); ?></td>
                        <td><?php echo e($post->tag); ?></td>
                        <td><?php echo e($post['description']); ?></td>
                        <td>
                            
                                
                            
                        <a href="<?php echo e(route('post.edit',$post['id'])); ?>">
                            <button type="submit" class="btn btn-warning">Edit</button>
                        </a>
                        </td>
                        <td>
                            <a href="<?php echo e(URL::to('posts/deletePost/'.$post->id)); ?>">
                                <button type="submit" class="btn btn-danger">delete</button>
                            </a>
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