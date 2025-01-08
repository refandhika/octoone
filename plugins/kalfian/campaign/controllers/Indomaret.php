<?php namespace Kalfian\Campaign\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Indomaret extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Kalfian.Campaign', 'campaign');

        $this->addJs("/plugins/definite/userlog/assets/jquery.table2excel.min.js");
    }
}
