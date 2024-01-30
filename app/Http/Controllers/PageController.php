<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        flash()->success('Test flashMessage');
        return view('page.about');
    }
}
