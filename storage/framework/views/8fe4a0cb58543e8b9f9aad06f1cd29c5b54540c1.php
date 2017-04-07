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
</body>
</html>