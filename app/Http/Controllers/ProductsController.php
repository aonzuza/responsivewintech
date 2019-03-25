<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    //

    public function index(){
      $products = Product::where('groupID',2)->get();

      return view('TH/products')->with('products',$products);
    }
    public function show($groupIDs){

        $groupIDs = explode(',',$groupIDs);

        $products = Product::whereIn('groupID',$groupIDs)->orderBy('groupID','asc')->get();
        //$products = Product::where('groupID',$groupID)->get();

        return view('pages/products')->with('products',$products);

    }
}
