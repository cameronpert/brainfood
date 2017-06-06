@extends('layout.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<h1>{{ $task->title }}</h1>

		<br><br>

        <a class="btn btn-outline-primary" href="/tasks/edit/{{ $task->id }}">Change Title</a>
        
        <a class="btn btn-outline-primary" href="/tasks/complete/{{ $task->id }}">Mark Complete</a>

        <hr>

        <form method="POST" action="/tasks/{{ $task->id }}">

	        {{ csrf_field() }}

	        <input type="submit" class="mb-xs mt-xs mr-xs btn btn-danger" value="Delete">

	    </form>

    </div>

@endsection