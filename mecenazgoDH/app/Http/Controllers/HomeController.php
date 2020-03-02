<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use App\contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        dd('here');
        $projects = Project::inRandomOrder()->limit(4)->get();


        if(isset(session('project')->id)){

            $cart = Project::find(session('project')->id);
            return view('website.index',
                [
                    'projects' => $projects ,

                ]
            );


            return view('website.index',
            [
                'projects' => $projects ,

            ]
        );
    }
}
}
