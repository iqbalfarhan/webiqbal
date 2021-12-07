<?php

namespace App\Http\Controllers;

use App\Socialmedia;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
            'datas' => Socialmedia::all()
        ];

        return view('social.index', $data);
    }

    public function store(Request $request)
    {
        Socialmedia::create($request->all());
        return back();
    }
}
