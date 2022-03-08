<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        if (!auth()->user()->hasRole('admin')) {
            return redirect()->route('index');
        }
        return view('admin.pages.index');
    }
}
