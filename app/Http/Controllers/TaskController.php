<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        // $lists = DB::table('tasks')->orderBy('id', 'desc')->get();
        $lists = Task::orderBy('id', 'desc')->get();
        return view('task.index', [
            'submit' => 'Create',
            'task' => new Task,
            'tasks' => $lists,
        ]);
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        return back(); //default redirect()->back
    }

    public function edit(Task $task)
    {
        // $task = DB::table('tasks)->where('id', $id)->first();
        // $task = Task::where('id', $id)->first();
        // $task = Task::find($id);
        // $task = Task::findOrFail($id);
        return view('task.edit', [
            'submit'    => 'Update',
            'task' => $task

        ]);
    }

    public function update(TaskRequest $request, $id)
    {
        // DB::table('tasks')->where('id', $id)->update(['list' => $request->input('task')]);
        Task::find($id)->update([
            'list' => $request->input('list'),
            'mark' => false
        ]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        // DB::table('tasks')->where('id', $id)->delete();
        Task::find($id)->delete();
        return back();
    }
}
