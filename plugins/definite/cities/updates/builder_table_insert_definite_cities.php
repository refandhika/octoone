<?php namespace Definite\Cities\Updates;

use DB;
use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableInsertDefiniteCities extends Migration
{
    public function up()
    {
        $query_string = file_get_contents(__DIR__ . '/province.sql');
        DB::statement($query_string);

        $query_string = file_get_contents(__DIR__ . '/city.sql');
        DB::statement($query_string);
    }
    
    public function down()
    {
        
    }
}
