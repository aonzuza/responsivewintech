<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productgroup;
class ProductsController extends Controller
{
    //

    public function index(){
      $products = Product::where('groupID',2)->get();

      return view('TH/products')->with('products',$products);
    }
    public function show($groupIDs){

        $groupIDs = explode(',',$groupIDs);

        $products = Product::whereIn('groupID',$groupIDs)->orderBy('groupID','desc')->get();


        $group= Productgroup::whereIn('ID',$groupIDs)->where('headerimg','<>','')->first();
        $headerImg = $group->headerimg;

        $isSteelDoor = in_array ( 32, $groupIDs , false );
        // $isSteelDoor = true;

        return view('pages/products')->with('products',$products)
                                     ->with('headerImg',$headerImg)
                                     ->with('isSteelDoor',$isSteelDoor);

    }
}
