<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Image;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
    	$data = [
            'no' => 1,
            'title' => 'Project',
            'subtitle' => 'Project list',
            'datas' => Project::orderBy('created_at', 'DESC')->get()
        ];

        return view('project.index', $data);
    }

    public function create()
    {
    	$data = [
            'title' => 'Project',
            'subtitle' => 'Create Project',
        ];

        return view('project.create', $data);
    }

    public function store(Request $request)
    {
        $input = $request->merge([
            'slug'      => Str::slug($request->title, "-"),
            'show'      => $request->show ? true : false,
            'unique_id' => uniqid(),
        ])->all();

        $baru = Project::create($input);

        $image = $request->file('photo');
        if ($image) {
            $extension = $image->extension();
            $filename = Str::slug($request->title, "-").".".$extension;
            $toPath = public_path('gambar');

            $savename = 'gambar/'.$filename;
            $upload = $image->move($toPath, $filename);

            $baru->update([
                'photo' => $savename
            ]);
        }
        return redirect()->route('project.index')->with('status', 'project baru berhasil ditambahkan');
    }

    public function show(Project $project)
    {
    	return $project;
    }

    public function edit(Project $project)
    {
    	return view('project.edit', ['data' => $project]);
    }

    public function update(Request $request, Project $project)
    {
    	// $image = $request->file('photo');
        $input = $request->merge([
            'slug'      => Str::slug($request->title, "-"),
            'show'      => $request->show ? true : false,
            'unique_id' => uniqid(),
        ])->all();

        $project->update($input);

        $image = $request->file('photo');

        if ($image) {
            $extension = $image->extension();
            $filename = Str::slug($request->title, "-").".".$extension;
            $toPath = public_path('gambar');

            $savename = 'gambar/'.$filename;
            $upload = $image->move($toPath, $filename);

            $project->update([
                'photo' => $savename
            ]);
        }

        return redirect()->route('project.index')->with('status', 'project baru berhasil ditambahkan');
    }

    public function destroy(Project $project)
    {
    	$project->delete();
        return back()->with('status', 'Project berhasil dihapus');
    }
}
