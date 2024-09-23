<?php namespace Leverate\Ramadan\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use DB;


class User extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Leverate.Ramadan', 'ramadan', 'ramadan_user');
       	//passing data to view
        $skm_mart = DB::table('leverate_ramadan_skm_mart')->get();
        $rtd_mart = DB::table('leverate_ramadan_rtd_mart')->take(2000)->get();
        $skm_midi = DB::table('leverate_ramadan_skm_midi')->get();
        $rtd_midi = DB::table('leverate_ramadan_rtd_midi')->get();

       $this->vars['skm_mart'] = '<span style="color:blue"><b>'.count($skm_mart->where('status',1)).'</b></span> '. '/ '. '<b>'.count($skm_mart).'</b>';
        $this->vars['rtd_mart'] = '<span style="color:blue"><b>'.count($rtd_mart->where('status',1)).'</b></span> '.' / '. '<b>'.count($rtd_mart).'</b>';
       $this->vars['skm_midi'] = '<span style="color:blue"><b>'.count($skm_midi->where('status',1)).'</b></span> '.' / '. '<b>'.count($skm_midi).'</b>';
        $this->vars['rtd_midi'] = '<span style="color:blue"><b>'.count($rtd_midi->where('status',1)).'</b></span> '.' / '. '<b>'.count($rtd_midi).'</b>';
    }
}
