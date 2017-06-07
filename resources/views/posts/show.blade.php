@extends('layout.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<h1>{{ $post->title }}</h1>

		{{ $post->body }}

		<hr>
	
		<div class="comments">

			<ul class="list-group">

				@foreach ($post->comments as $comment)

					<li class="list-group-item">
						<strong>
							{{ $comment->user->name }}: &nbsp;
						</strong>
						<strong>
							{{ $comment->created_at->diffForHumans() }}: &nbsp;
						</strong>

						{{ $comment->body }}

					</li>

				@endforeach

			</ul>

			<hr>

			@if (Auth::check())

            	@include('posts.comments')

          	@elseif (! Auth::check())

            	<h5>Please <a href="/login">Log In</a> to leave a comment.</h5>

          	@endif

		</div>

	</div>

@endsection





















