<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Banner2 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_banner', function($table)
        {
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_banner', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
