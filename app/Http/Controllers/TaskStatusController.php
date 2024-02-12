<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskStatus;
use Illuminate\Support\Facades\Auth;

class TaskStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taskStatuses = TaskStatus::orderBy('id')->get()->paginate(15);
        return view("task_status.index", compact("taskStatuses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            abort(403, __('auth.forbidden'));
        }
        return view('task_status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
            abort(419);
        }
        $data = $request->validate([
            'name' => 'required|unique:task_statuses|max:255',
        ], [
            'name.unique' => __('validation.unique_name'),
        ], [
            'name' => __('validation.attributes.status')
        ]);
        $taskStatus = new TaskStatus();
        $taskStatus->fill($data);
        $taskStatus->save();

        flash(__('flash.task_statuses.store.success'))->success();

        return redirect()->route('task_statuses.index');
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
        if (!Auth::check()) {
            abort(403, __('auth.forbidden'));
        }

        return view('task_status.edit', compact('taskStatus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskStatus $taskStatus)
    {
        if (!Auth::check()) {
            abort(419);
        }

        $data = $request->validate([
            'name' => 'required|max:255|unique:task_statuses,name,' . $taskStatus->id,
        ], [
            'name.unique' => __('validation.unique_name'),
        ], [
            'name' => __('validation.attributes.status')
        ]);

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
        if (!Auth::check()) {
            abort(419);
        }
        $taskStatus->delete();

        flash(__('flash.task_statuses.delete.success'))->success();

        return redirect()->route('task_statuses.index');
    }
}
