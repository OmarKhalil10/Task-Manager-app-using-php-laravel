@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
    <div class="card-header">
        Add New Task
    </div>
    <div class="card-body">
    
    <!-- Validate the data before send it to the databasr -->

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="post" action="{{url('/addtask')}}">
    @csrf
    <div class="form-group">
        <label for="exampledescription">Developer Name</label>
        <input type="text" class="form-control" id="exampledeveloper" aria-describedby="developerHelp" name="developer" placeholder="Developer Name" required>
    </div>
    <div class="form-group">
        <label for="examplename">Task Name</label>
        <input type="text" class="form-control" id="examplename" placeholder="Password" name="name" placeholder="Enter Task Name" required>
    </div>
    <div class="form-group">
        <label for="exampledescription">Task Description</label>
        <input type="text" class="form-control" id="exampledescription" aria-describedby="descriptionHelp" name="description" placeholder="Enter Task Description" required>
        <small id="descriptionHelp" class="form-text text-muted">Task Description should be 20 characters at least.</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
    </div>
    </div>
@endsection