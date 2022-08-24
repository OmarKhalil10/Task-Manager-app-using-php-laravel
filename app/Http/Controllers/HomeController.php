<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\taskmodel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     // my functions

    public function new(){
        return view('newtask');
    }
    public function index(){

        $data = taskmodel::all();

        return view('home', ["task"=>$data]);
    }
    public function store(request $request){

        // dd(request()); data dump

        // data validation

        $request->validate([
            'name'=>'required|max:50',
            'description'=>'required|min:20',
            'developer'=>'required|max:30',
        ]);

        taskmodel::create($request->all());

        // flash the status of task creation

        session()->flash('success', 'Task Created Successfully!');

        return redirect(to:'/home');
    }
    public function remove($id){

        $task = taskmodel::find($id);
        $task->delete();
        session()->flash('success', 'Task Deleted Successfully!');
        return redirect(to:'/home');
    }
    public function edit($id){

        $record = taskmodel::find($id);
        return view('edit', ["task"=>$record]);
    }
    public function update(request $request, $id){

        $newData = taskmodel::find($id);
        $newData->update($request->all());
        return redirect(to:'/home');
    }
}
