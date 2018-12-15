<?php $__env->startSection('main_content'); ?>
    <h3>my name is abhi.</h3>
    The current UNIX timestamp is <?php echo e(time()); ?>.
    <a href="<?php echo e(route('template.index')); ?>">Quotes</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('bladeMaster', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>