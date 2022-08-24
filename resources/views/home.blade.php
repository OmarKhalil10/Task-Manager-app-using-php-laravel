@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card">
    <div class="card-header text-center">All Tasks</div>
    <div class="card-body">
    <!-- alert form the taskController to appear if the task is created successfully-->
   
    @if (session()->get('success'))
    <div class="alert alert-success" id="hide">{{session()->get('success')}}</div>
    @endif
    <div class="table-responsive-sm"> 
    <table class="table table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th>Task Name</th>
            <th>Task Description</th>
            <th>Task Developer</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($task as $value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->description}}</td>
            <td>{{$value->developer}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td><a href="{{url('task/edit/'.$value->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="{{url('task/delete/'.$value->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script>
    const timeout = document.getElementById('hide')
    setTimeout(hideElement, 2000)
    function hideElement(){
        timeout.style.display = 'none'
    }
    </script>

</div>
</div>
</div>
@endsection
