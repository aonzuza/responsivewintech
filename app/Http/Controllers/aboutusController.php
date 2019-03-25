<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

use Session;
use App;
class aboutusController extends Controller
{
    //
    public function index(){


      $projects = Storage::disk('public')->files('images/aboutus/projects');


      return view('TH/aboutus')->with('projects',$projects);

    }


}
