
<h4>Create New Article</h4>
<form method="POST" action="{{ url('articles/create') }}">
	{{ csrf_field() }}
	<div>
		<label for="name">Title:</label>
		<input type="text" name="title">
	</div>
	<br>
	<div>
		<label for="content">Content:</label>
		<textarea type="text" name="content"></textarea>
	</div>
	<br>
	<button type="submit">Submit</button>
</form>
