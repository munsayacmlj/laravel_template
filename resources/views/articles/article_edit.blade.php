@extends('applayout')

@section('title')
	Edit New Article
@endsection

@section('main_content')
	<div class="container">
		<h1>Create New Article</h1>
		<form method="POST" style="width: 50%;">
			{{ csrf_field() }}
			<div class="form-group">
				<label>Title:</label>
				<input class="form-control" type="text" name="title" value="{{ $article->title }}">
			</div>
			
			<div class="form-group">
				<label>Content:</label>
				<textarea class="form-control" name="content">{{ $article->content }}</textarea>
			</div>
			<input class="btn btn-success" type="submit" name="submit" value="Submit">
		</form>
	</div>
@endsection