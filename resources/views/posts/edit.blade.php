@extends('layouts.app')

@section('content')
	<h1>Edit post</h1>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('title', 'Title') !!}
			{!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('body', 'Body') !!}
			{!! Form::textarea('body', $post->body, [
				'id' => 'article-ckeditor',
				'class' => 'form-control',
				'placeholder' => 'Body of the post'
			]) !!}
		</div>
		{{ Form::hidden('_method', 'PUT') }}
		<div class="form-group">
			{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection