@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
				<hr>
				<p>
					Written on {{ $post->created_at->diffForHumans() }} by <b>{{ $post->user->name }}</b>
				</p>
			</div>
		@endforeach
	@else
		<p>No posts found</p>
	@endif
@endsection