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
</body>
</html>