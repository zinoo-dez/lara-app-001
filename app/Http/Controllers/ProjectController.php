<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function index()
    {
        Session::put('testing', 'project');
        return view('projects.index');
    }
}