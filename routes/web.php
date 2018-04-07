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

use Illuminate\Http\Request;

Route::get('/', function () {
    return '';
});

Route::get('/create', function () {
    return view('homeform');
});

Route::post('/',function(Request $request){
    $phonenumber = $request->input('scammernumber');
    return view('popups.virus1',['title'=>'','phonenumber'=>$phonenumber]);
    
});
