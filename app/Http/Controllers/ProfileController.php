<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'no' => 1,
            'datas' => Profile::all()
        ];
        return view('profile.index', $data);
    }

    public function store(Request $request)
    {
        Profile::create($request->all());
        return back();
    }

    public function edit(Profile $profile)
    {
        // code...
    }
}
