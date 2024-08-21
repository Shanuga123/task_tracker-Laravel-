@extends('layouts.app')
  
@section('title', 'Edit Task')
  
@section('contents')
    <h1 class="mb-0">Edit Task</h1>
    <hr />
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $task->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Date</label>
                <input type="text" name="date" class="form-control" placeholder="Date" value="{{ $task->date }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Task Code</label>
                <input type="text" name="task_code" class="form-control" placeholder="Task Code" value="{{ $task->task_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Descriptoin" >{{ $task->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
     <script src="{{ mix('js/app.js') }}"></script>
@endsection