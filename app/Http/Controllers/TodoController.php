<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        $todos = Todo::all();
        return view("todos.index", compact("todos"));
    }
    public function create(){
        return view("todos.create");
    }

    public function store(Request $request){
        #dd($request->all());
        $this->validate($request, [
            "title" => "required|min:4|max:50",
            "description" => "required|min:4",
        ]);

        $todo = Todo::create([
            "name"=> $request->title,
            "description"=> $request->description,
        ]);

        if($todo){
            return redirect()->route('todos.index')->with("success","Todo created successfully");
        }
              return redirect()->route('todos.index')->with("error","Unable to create Todo");
            }
public function show($id){
    $todo = Todo::find($id);

    dd($todo);
}
}
