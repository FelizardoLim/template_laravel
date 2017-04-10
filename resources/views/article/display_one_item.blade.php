<!DOCTYPE html>
<html>
<head>
	<title>Display One Item</title>
</head>
<body>
	<p> {{ $article->title }} </p>
	<p> {{ $article->content}} </p>
	<a href='{{ url("articles/$article->id/edit") }}'><button>Edit</button></a>
	<a href='{{ url("articles/$article->id/delete") }}'><button>Delete</button></a>
	<br>
	@foreach($article->comments as $key=>$comment)
		<p> Comment: {{ $comment->content }} </p>
		<p> Comment ID: {{ $comment->id }} </p>
		<p> Comment Author: {{ $comment->owner->name }} </p>
		<p> Article Commented: {{ $comment->article->title }} </p>
	@endforeach
	<br>
	<form method="POST" action='{{ url("articles/$article->id/comment") }}'>
		{{ csrf_field() }}
		<label>Leave Comment: </label><br>
		<textarea name="comment"></textarea><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>