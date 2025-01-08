<?php

namespace Leverate\Ramadan\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;
use Carbon\Carbon;
use Excel;
use Illuminate\Support\Facades\Validator;
use Auth;
use DateTime;
use Backend\Facades\BackendAuth;
use leverate\ramadan\Exports\DataExport;
use leverate\ramadan\Exports\DataExportUser;
use Leverate\Ramadan\Models\User;
use Redirect;

class ExportController extends Controller
{
    
    public function exportData($start, $end, $product, $market)
    {    

        //get string type.
         $product == 1 ? $type_product = 'SKM'      : $type_product = 'RTD';
         $market  == 1 ? $type_market  = 'Alfamart' : $type_market  = 'Alfamidi';
 
    	 if (BackendAuth::check()) {

                 return (new DataExport)->download('Ramadan.xlsx');

                 
            }
        
      
    }
	
	public function exportDataUser()
    {    

    	 if (BackendAuth::check()) {

                 return (new DataExportUser)->download('User.xlsx');

                 
            }
        
      
    }
}