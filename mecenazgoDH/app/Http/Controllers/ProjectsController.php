<?php

namespace App\Http\Controllers;

use App\Project;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  //
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(10);

        //return view('projects.index', ['projects' => $projects, ]);

        return view('projects.index',['proyectos' => Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrepreneur.projects.create',

        ['projects' => Project::all(), 'proyecto' => new Project]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request,
        [
        'name' => 'required',
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required',
        'amount' => 'required',
        'description_detail' => 'required',
        ]);


        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $name = $request->name.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/Projects');
            $image->move($destinationPath, $name);
        }

        $project = new Project;

        $project->name = $request->get('name');



        $project->title = $request->get('title');

        $project->image = $request->get('image');

        $project->description_detail = $request->get('description_detail');

        $project->status = $request->get('status');

        $project->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, $id)
    {

        $project = Project::findOrFail($id);

        return view('entrepreneur.products.show',
           [
            'project' => $project ,
           ]
         );
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project, $id)
    {
        $project = Project::findOrFail($id);


        return view('entrepreneur.projects.edit', ['project' => $project, 'title' => $project->title ]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function delete(Project $project, $id)
    {
        $product = Project::findOrFail($id);


        return view('entrepreneur.projects.edit', ['project' => $project, 'title' => $project->title ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project , $id)
    {
        $this->validate ($request,
        [
         'name' => 'required',
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required',
        'amount' => 'required',
        'description_detail' => 'required',
        ]);

        $project = Project::find($id);
        $project->update($request->all());

        return redirect('projects/' . $project->id);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $id)
    {


        $project = Project::findOrFail($id);
        $project->delete();

        return redirect('/projects');
    }


}
