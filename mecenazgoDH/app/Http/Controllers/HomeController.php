<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $topProjects = Project::orderBy('more_popular')->take(3)->get()->paginate(1);


       return view('home')->with('topProjects', $topProjects);

        //return view('home');
    }
}
