<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Downloadgroup;
use App\Models\Downloaditem;

class DownloadController extends Controller
{
    //

    public function index(){


      $groups = Downloadgroup::orderBy('grouporder','asc')->get();
      $items  = Downloaditem::orderBy('itemorder','asc')->get();

      return view('pages/downloads')->with('groups',$groups)->with('items',$items);

    }
}
