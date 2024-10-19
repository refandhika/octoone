<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan20245 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
