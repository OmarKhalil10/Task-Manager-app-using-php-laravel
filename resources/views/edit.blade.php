@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
    <div class="card-header">
        Edit Task
    </div>
    <div class="card-body">
    
    <form method="post" action="{{url('/task/update/'.$task->id)}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label><br>
            <input type="text" class="form-control" id="examplename" name="name" placeholder="Enter Task Name" value="{{$task->name}}" required>
        </div>
        <div class="form-group">
            <label for="exampledesc">Description</label><br>
            <input type="text" class="form-control" id="exampledesc" aria-describedby="emailHelp" placeholder="Enter Task Description" name="description" value="{{$task->description}}" required>
        </div>
        <div class="form-group">
            <label for="exampledevname">Developer</label><br>
            <input type="text" class="form-control" id="exampledevname" placeholder="Developer Name" name="developer" value="{{$task->developer}}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Update</button>
    </form>

    </div>
    </div>
    </div>
@endsection