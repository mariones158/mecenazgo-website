<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Collection;

 use App\Project;

class WebsiteController extends Controller
{
    public function index()
    {
        $projects = Project::All();
        /* inRandomOrder()->limit(4)->get(); */


            return view('website.index',
                [
                    'projects' => $projects ,

                ]
            );
}
}

