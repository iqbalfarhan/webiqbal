<?php

namespace App\Http\Controllers;

use Artisan;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    public function index()
    {
    	$data = [
    		'title' => 'Terminal',
    		'subtitle' => 'command executer',
    	];
    	return view('terminal', $data);
    }

    public function store(Request $request)
    {
    	$run = Artisan::call($request->command);
    	return back()->with('status', 'Artisan command run succesfully');
    }
}
