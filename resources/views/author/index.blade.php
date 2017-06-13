@extends('layout.master')

@section('content')

	<div class="col-sm-8">

		<h1>Our Authors</h1><br>

		<ul>

			@foreach ($users as $user)

			
				<li><a href="/authors/{{ $user->id }}">{{ $user->name }}</a></li>

			@endforeach

		</ul>

	</div>
	
@endsection