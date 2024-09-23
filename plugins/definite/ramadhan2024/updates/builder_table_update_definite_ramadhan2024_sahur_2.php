<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Sahur2 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->integer('resep_id');
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->dropColumn('resep_id');
        });
    }
}
