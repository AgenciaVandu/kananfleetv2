<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:superadmin|admin|editor');
    }

    public function index(){
        return view('admin.pages.index');
    }
}
