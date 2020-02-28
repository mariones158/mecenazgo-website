<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;  //
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;

use App\Project;

class WebsiteController extends Controller
{
    public function index()
    {
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
