<?php $__env->startSection('title'); ?>
Home page
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
This
is
the
content
section
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
Sidebar content here
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>