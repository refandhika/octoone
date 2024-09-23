<?php namespace Definite\Milkpedia\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Model;

class Newsletter extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Definite.Milkpedia', 'milkpedia', 'newsletter');
    }
	    public function listExtendQuery($query)
	{
	    $query->where('email_newsletter', 1);
	}
        public function listOverrideColumnValue(Model $record, string $columnName, string $definition=NULL)
    {
           if($columnName == "email_newsletter" && $record->email_newsletter == 1)
        
            return "Ya";
        
    }
}
