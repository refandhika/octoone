<?php namespace Definite\News\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Aniversary extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Definite.News', 'aniversary-menu-item');
    }
}
