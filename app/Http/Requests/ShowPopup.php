<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShowPopup extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'popup_id' => 'required|int|min:1',
            'popupTitle' => 'required',
            'scammernumber' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'popup_id.min' => 'Please select a Popup Type from the drop down',
            'popupTitle.required' => 'Please enter a Window Title',
            'scammernumber.required' => 'Please enter the Scammer Phone Number you are calling',
        ];
    }
}
