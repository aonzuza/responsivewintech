<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/changelang', function () {
  
   $lang =  (Session::get('locale') == 'en') ? 'th' : 'en';
   Session::put('locale', $lang);
   return redirect()->back();

});



//  -------------- Thai routes --------------------//
Route::get('/', function () {
    return view('TH/home');
});
Route::get('/home', function () {
    return view('TH/home');
});

Route::get('/aboutus',[
    'uses' => 'aboutusController@index',
]);

Route::get('/downloads', function () {
    return view('TH/downloads');
});

Route::get('/contactus', function () {
    return view('TH/contactus');
});

Route::get('/homeautomation', function () {
    return view('TH/homeautomation');
});
Route::get('/oem', function () {
    return view('TH/oem');
});
Route::get('/steel_galvanized', function () {
    return view('TH/steel_galvanized');
});

Route::get('/steeldoor', function () {
    return view('TH/steeldoor');
});


//contactus/sendMail
Route::get('products',[
    'uses' => 'ProductsController@index',
]);
Route::get('products/{productID}',[
    'uses' => 'ProductsController@show',
]);
Route::get('/residentiallock', function () {
    return view('TH/residentiallock');
});


//contactus/sendMail
Route::post('/contactus',[
    'uses' => 'ContactusController@sendMail',
]);

Route::get('/test', function () {
    return view('TH/test');
});

// ---------------------end thai route----------------/
