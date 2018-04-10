<?php

namespace App\Popups;

class WindowsPornVirus implements IFakePopup
{
    public function optionText()
    {
        return 'Windows Porn Virus';
    }

    public function viewName()
    {
        return 'mspornvirus';
    }

    public function formSettingsArray()
    {
        return [
            'uses' => [
                'errorCodeInputGroup',
            ],
            'title' => 'Windows Virus Detected',
        ];
    }
}
