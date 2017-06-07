<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::get();

		if (auth()->check())
        {
            return view('tasks.index', compact('tasks'));
        }

        elseif (! auth()->check())
        {
          return view('sessions.create');
        }
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required'
            ]);

        Task::create([
            'title' => request('title'),
            'user_id' => auth()->id(),
            'completed' => 0
            ]);

        return redirect('/tasks');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function destroy($id)
    {
        \DB::table('tasks')->where('id', $id)->delete();

       return redirect('/tasks');
    }

    public function showUpdateTitle($id)
    {
        $task = \DB::table('tasks')->find($id);
        return view('tasks.edit', compact('task'));
    }

    public function UpdateTitle($id)
    {
        \DB::table('tasks')
            ->where('id', $id)
            ->update([
                'title' => request('newtitle')
            ]);

        return redirect('/tasks');
    }

    public function completeTask($id)
    {
        \DB::table('tasks')
            ->where('id', $id)
            ->update([
                'completed' => 1,
            ]);

        return redirect('/tasks');
    }

    public function incompleteTask($id)
    {
        \DB::table('tasks')
            ->where('id', $id)
            ->update([
                'completed' => 0,
            ]);

        return redirect('/tasks');
    }
}


























