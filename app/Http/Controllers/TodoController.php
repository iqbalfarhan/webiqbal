<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return back();
    }
}
