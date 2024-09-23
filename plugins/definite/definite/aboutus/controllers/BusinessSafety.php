<?php namespace Definite\Aboutus\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class BusinessSafety extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Definite.Aboutus', 'AboutUs', 'side-menu-item');
    }
}
