<?php namespace Definite\Ramadhan2024\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class WaContainer extends Controller
{
    public $implement = [        'Backend\Behaviors\FormController'    ];
    
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Definite.Ramadhan2024', 'main-menu-item', 'side-menu-item11');
    }
}
