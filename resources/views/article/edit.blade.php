
<h4>Create New Article</h4>
<form method="POST" action='{{ url("articles/{$article_to_be_edited->id}/edit") }}'>
	{{ csrf_field() }}
	<div>
		<label for="name">Title:</label>
		<input type="text" name="title" value='{{ $article_to_be_edited->title }}'>
	</div>
	<br>
	<div>
		<label for="content">Content:</label>
		<textarea type="text" name="content">{{ $article_to_be_edited->content }}</textarea>
	</div>
	<br>
	<button type="submit">Submit</button>
</form>
