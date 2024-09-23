<?php namespace Kalfian\Subscriber\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Subscriber extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kalfian.Subscriber', 'subscriber-menu');

        $this->addJs("/plugins/kalfian/subscriber/assets/jquery.table2excel.min.js");
    }
}
