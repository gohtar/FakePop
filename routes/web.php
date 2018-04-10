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
use App\PopupRegister;

Route::get('/', function () {
    return '';
});

Route::get('/create', function () {
    return view('homeform', ['popup_options' => array_column(PopupRegister::$fake_popup_options, 'text')]);
});

Route::post('/', function (Request $request) {
    $phonenumber = $request->input('scammernumber');
    $title = $request->input('popupTitle');
    $errorcode = $request->input('errorcode');
    $popupid = $request->input('popup_id');

    $view = PopupRegister::$fake_popup_options[$popupid]['view'];

    return view('popups.' . $view, ['title' => $title, 'phonenumber' => $phonenumber, 'errorcode' => $errorcode]);
});
