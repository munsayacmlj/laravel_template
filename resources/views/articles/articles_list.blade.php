@extends('applayout')

@section('title')
	Articles List
@endsection

@section('main_content')
	
	<a href="{{ url('articles/create') }}"><button>Create a New Article</button></a>
	<h3>List of Articles</h3>


	<ul>
		@foreach ($articles as $article)
		<li>
			<p>
				<a href='{{ url("articles/$article->id") }}'>{{ $article->title }}</a>
				<a href='{{ url("articles/$article->id/delete") }}'>
					<button>Delete This Article</button>
				</a>
			</p>
		</li>
		@endforeach
	</ul>
@endsection
