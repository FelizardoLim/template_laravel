<!DOCTYPE html>
<html>
<head>
	<title>Display One Item</title>
</head>
<body>
	<p> <?php echo e($article->title); ?> </p>
	<p> <?php echo e($article->content); ?> </p>
	<a href='<?php echo e(url("articles/$article->id/edit")); ?>'><button>Edit</button></a>
	<a href='<?php echo e(url("articles/$article->id/delete")); ?>'><button>Delete</button></a>
	<br>
	<?php $__currentLoopData = $article->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<p> Comment: <?php echo e($comment->content); ?> </p>
		<p> Comment ID: <?php echo e($comment->id); ?> </p>
		<p> Comment Author: <?php echo e($comment->owner->name); ?> </p>
		<p> Article Commented: <?php echo e($comment->article->title); ?> </p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<br>
	<form method="POST" action='<?php echo e(url("articles/$article->id/comment")); ?>'>
		<?php echo e(csrf_field()); ?>

		<label>Leave Comment: </label><br>
		<textarea name="comment"></textarea><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>