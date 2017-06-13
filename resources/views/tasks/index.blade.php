@extends('layout.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<h1>{{ auth()->user()->name }}'s Tasks</h1><br>

    	@foreach ($tasks as $task)
        	
            @if(auth()->user()->id == $task->user_id)

                @if ($task->completed)
            		<li class="list-group-item">
                        <strike>{{ $task->title }}</strike>
                        <a class ="ml-auto" href="/tasks/{{ $task->id }}">Edit</a>
                    </li>
            	@else
            		<li class="list-group-item">
                        {{ $task->title }}
                        <a class ="ml-auto" href="/tasks/{{ $task->id }}">Edit</a>
                    </li>
            	@endif

            @endif
            
        @endforeach

        <br><br>

        <h5>Add a new Task</h5>

        <form method="POST" action="/tasks">

            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" class="form-control" id="title" name="title" placeholder="Your To-Do Item here.">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>

            @include('layout.error')
            
        </form>

    </div>

@endsection