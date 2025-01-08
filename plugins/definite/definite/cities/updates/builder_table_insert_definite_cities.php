<?php namespace Definite\Cities\Updates;

use DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
