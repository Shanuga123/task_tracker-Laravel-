<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Task;
use App\Events\TaskUpdated;

 
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::orderBy('created_at', 'DESC')->get();
  
        return view('tasks.index', compact('task'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::create($request->all());
 
        return redirect()->route('tasks')->with('success', 'Task added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);
  
        return view('tasks.show', compact('task'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
  
        return view('tasks.edit', compact('task'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);
  
        $task->update($request->all());
        broadcast(new TaskUpdated($task));
  
        return redirect()->route('tasks')->with('success', 'task updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
  
        $task->delete();
  
        return redirect()->route('tasks')->with('success', 'task deleted successfully');
    }
}