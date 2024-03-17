<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskStatusRequest;
use App\Models\TaskStatus;

class TaskStatusController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(TaskStatus::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskStatuses = TaskStatus::orderBy('id')->paginate();
        return view('task_status.index', compact('taskStatuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task_status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskStatusRequest $request)
    {
        $data = $request->validated();
        $taskStatus = new TaskStatus($data);
        $taskStatus->save();

        flash(__('flash.task_statuses.store.success'))->success();

        return redirect()->route('task_statuses.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskStatus $taskStatus)
    {
        return view('task_status.edit', compact('taskStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreTaskStatusRequest $request, TaskStatus $taskStatus)
    {
        $data = $request->validated();
        $taskStatus->fill($data);
        $taskStatus->save();

        flash(__('flash.task_statuses.update.success'))->success();

        return redirect()->route('task_statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskStatus $taskStatus)
    {
        if ($taskStatus->tasks()->exists()) {
            flash(__('flash.task_statuses.delete.error'))->error();
            return back();
        }

        $taskStatus->delete();
        flash(__('flash.task_statuses.delete.success'))->success();

        return redirect()->route('task_statuses.index');
    }
}
