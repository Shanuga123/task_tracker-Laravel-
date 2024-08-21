@extends('layouts.app')
  
@section('title', 'Show Task')
  
@section('contents')
    <h1 class="mb-0">Detail Task</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $task->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Date</label>
            <input type="text" name="date" class="form-control" placeholder="Date" value="{{ $task->date }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">task_code</label>
            <input type="text" name="task_code" class="form-control" placeholder="Task
             Code" value="{{ $task->task_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $task->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $task->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $task->updated_at }}" readonly>
        </div>
    </div>
@endsection