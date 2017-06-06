@extends('layout.master')

@section('content')

	<div class="col-sm-8 blog-main">

		<h5>Edit Task Title:</h5>

		<form method="POST" action="/tasks/edit/{{ $task->id }}">

        {{ csrf_field() }}

            <div class="form-group">
                <input type="text" class="form-control" id="newtitle" name="newtitle">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

            @include('layout.error')
            
        </form>

    </div>

@endsection