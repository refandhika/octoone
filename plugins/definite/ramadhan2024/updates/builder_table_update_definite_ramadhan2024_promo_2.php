<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Promo2 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_promo', function($table)
        {
            $table->string('excerpt', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_promo', function($table)
        {
            $table->dropColumn('excerpt');
        });
    }
}
