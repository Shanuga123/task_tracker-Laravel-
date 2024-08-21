@extends('layouts.app')
  
@section('title', 'Create Task')
  
@section('contents')
    <h1 class="mb-0">Add Task</h1>
    <hr />
    <form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Date">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="task_code" class="form-control" placeholder="Task Code">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Descriptoin"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection