@extends('applayout')

@section('title')
	Create New Article
@endsection

@section('main_content')
	<h1>Create New Article</h1>

	<form method="POST">
		{{ csrf_field() }}
		<p>
			Title: <input type="text" name="title">
		</p>
		<p>
			Content: <textarea name="content"></textarea>
		</p>
		<input type="submit" name="submit" value="Submit">
	</form>
@endsection