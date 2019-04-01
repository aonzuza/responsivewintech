<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
// use Storage;


class aboutusController extends Controller
{
    //
    public function index(){


      // $projects = Storage::disk('public')->files('images/aboutus/projects');
      //
      //
      // return view('pages/aboutus')->with('projects',$projects);
      $projects = Project::all();
      return view('pages/aboutus')->with('projects',$projects);

    }


}
