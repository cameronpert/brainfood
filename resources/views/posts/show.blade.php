@extends('layout.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<h1>
			{{ $post->title }}
        </h1>
		
		<p class="blog-post-meta">
			{{ $post->user->name }} on 
			{{ $post->created_at->toFormattedDateString() }}
		</p>

		{{ $post->body }}

		<hr>

			@if (Auth::check())

            	@include('posts.comments')

          	@elseif (! Auth::check())

            	<h5>Please <a href="/login">Log In</a> to view and leave comments.</h5>

          	@endif

	</div>

@endsection





















