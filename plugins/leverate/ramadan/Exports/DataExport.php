<?php

namespace Leverate\Ramadan\Exports;

use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Leverate\Ramadan\Models\User;
use Leverate\Ramadan\Models\SkmMart;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Sheet;
use DB;

class DataExport implements FromQuery
{
	use Exportable;

    public function query()
    {   
        
        return User::query();
       
   }
}