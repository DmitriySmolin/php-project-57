<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabelRequest;
use App\Models\Label;

class LabelController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Label::class);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $labels = Label::orderBy('id')->paginate();
        return view('label.index', compact('labels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('label.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLabelRequest $request)
    {
        $data = $request->validated();
        $label = new Label($data);
        $label->save();

        flash(__('flash.labels.store.success'))->success();

        return redirect()->route('labels.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Label $label)
    {
        return view('label.edit', compact('label'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreLabelRequest $request, Label $label)
    {
        $data = $request->validated();
        $label->fill($data);
        $label->save();

        flash(__('flash.labels.update.success'))->success();

        return redirect()->route('labels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Label $label)
    {
        if ($label->tasks()->exists()) {
            flash(__('flash.labels.delete.error'))->error();
            return back();
        }

        $label->delete();
        flash(__('flash.labels.delete.success'))->success();

        return redirect()->route('labels.index');
    }
}
