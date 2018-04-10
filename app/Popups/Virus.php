<?php

namespace App\Popups;

class Virus implements IFakePopup
{
    public function optionText()
    {
        return 'Generic Virus';
    }

    public function viewName()
    {
        return 'virus1';
    }

    public function formSettingsArray()
    {
        return [
            'uses' => [],
            'title' => 'Windows Firewall Warning',
        ];
    }
}
