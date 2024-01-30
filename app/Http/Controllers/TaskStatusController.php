<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskStatus;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskStatuses = TaskStatus::all();
        return view("task_status.index", compact("taskStatuses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $taskStatus = new TaskStatus();
        return view("task_status.create", compact("taskStatus"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, ['required']);
        $taskStatus = new TaskStatus();
        $taskStatus->fill($data);
        $taskStatus->save();

        return redirect()->route('task_statuses.index')->with('success', 'Статус успешно создан');
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskStatus $taskStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskStatus $taskStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskStatus $taskStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        //
    }
}
