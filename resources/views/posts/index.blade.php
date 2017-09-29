@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="well">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<img src="storage/cover_images/{{ $post->cover_image }}" width="100%">
					</div>
					<div class="col-md-8 col-sm-8">
						<h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
						<hr>
						<p>
							Written on {{ $post->created_at->diffForHumans() }} by <b>{{ $post->user->name }}</b>
						</p>
					</div>
				</div> {{-- row --}}
			</div> {{-- well --}}
		@endforeach
	@else
		<p>No posts found</p>
	@endif
@endsection