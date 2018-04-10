<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Popups\IFakePopup;
use App\Popups\Virus;
use App\Popups\WindowsPornVirus;
use \Exception;
use App\Http\Requests\ShowPopup;

class OpenPopupController extends Controller
{
    /**
     * Register all of the popup settings here
     */
    protected $fake_popup_register = [
        1 => Virus::class,
         WindowsPornVirus::class,
    ];

    /**
     * Show the create form
     */
    public function create()
    {
        $options = [
            0 => '',
        ];
        foreach ($this->fake_popup_register as $id => $class) {
            $instance = $this->_getRegisteredPopupInstance($id);
            $options[] = $instance->optionText();
        }

        return view('homeform', ['popup_options' => $options]);
    }

    /**
     * Show the requested pop up
     */
    public function show(ShowPopup $request)
    {
        //Read the inputs
        $popupid = $request->input('popup_id');
        //Common
        $title = $request->input('popupTitle');
        $phonenumber = $request->input('scammernumber');
        //Popup specific
        $errorcode = $request->input('errorcode');

        //Get the popup settings instance
        $popup = $this->_getRegisteredPopupInstance($popupid);

        //Build the view data
        $view_data = [
            'title' => $title,
            'phonenumber' => $phonenumber,
            'errorcode' => $errorcode,
        ];

        return view('popups.' . $popup->viewName(), $view_data);
    }

    public function popupFormSettingsJson(Request $request)
    {
        $popup_id = $request->input('popup_id');

        $instance = $this->_getRegisteredPopupInstance($popup_id);

        return json_encode($instance->formSettingsArray());
    }

    /**
     * Get an instance of the given registered popup settings class.
     *
     * @return IFakePopup Popup settings
     */
    private function _getRegisteredPopupInstance($popup_id)
    {
        $class = $this->fake_popup_register[$popup_id];

        $instance = new $class();

        if ($instance instanceof IFakePopup) {
            return $instance;
        }

        throw new Exception($class . ' must implement ' . IFakePopup::class);
    }
}
