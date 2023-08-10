<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(){
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'priority' => ['required', 'string', 'max:255'],
        ]);

        $task = Task::create([
            'title' =>$request->title,
            'priority' =>$request->priority,
        ]);
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function show(){
        
    }
    public function destroy(){
        
    }
    public function create(){
        return view('tasks.create');
        
    }
}
