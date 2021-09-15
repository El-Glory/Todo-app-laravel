<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->paginate(3);
        return view('app', [
            'todos' => $todos
        ]);
    }

    public function create()
    {
        return view('addTodo');
    }

    public function store(Request $request)
    {
        // dd($request->body);
        $this->validate($request, [
            'body' => 'required'
        ]);

        Todo::create([
            'body' => $request->body
        ]);

        return redirect()->route('app');
    }


    public function edit(Todo $todo)
    {
        return view('edit')->with('todo', $todo);
    }

    public function update(Request $request, Todo $todo)
    {

        $this->validate($request, [
            'body' => 'required'
        ]);



        $todo->update($request->all());

        return redirect()->route('app');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back();
    }
}
