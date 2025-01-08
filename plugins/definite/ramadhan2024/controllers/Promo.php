<?php namespace Definite\Ramadhan2024\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Promo extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Definite.Ramadhan2024', 'main-menu-item', 'side-menu-item5');
    }
}
