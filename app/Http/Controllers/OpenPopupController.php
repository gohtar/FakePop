<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpenPopupController extends Controller
{
    protected $fake_popup_register = [
        0 => [
            'option_text' => 'Microsoft Help and Support',
            'view' => 'virus1'
        ],
        [
            'option_text' => 'Porn Virus',
            'view' => 'mspornvirus'
        ],
    ];

    public function create()
    {
        return view('homeform', ['popup_options' => array_column($this->fake_popup_register, 'option_text')]);
    }

    public function show(Request $request)
    {
        $phonenumber = $request->input('scammernumber');
        $title = $request->input('popupTitle');
        $errorcode = $request->input('errorcode');
        $popupid = $request->input('popup_id');

        $view = $this->fake_popup_register[$popupid]['view'];

        $view_data = [
            'title' => $title,
            'phonenumber' => $phonenumber,
            'errorcode' => $errorcode,
        ];

        return view('popups.' . $view, $view_data);
    }
}
