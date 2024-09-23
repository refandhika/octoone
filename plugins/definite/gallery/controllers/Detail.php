<?php namespace Definite\Gallery\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Detail extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'manage_gallery_detail' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Definite.Gallery', 'Gallery', 'Gallery Detail');
    }
}
