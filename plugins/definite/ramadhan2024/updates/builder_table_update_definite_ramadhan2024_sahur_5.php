<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Sahur5 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->string('link', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->dropColumn('link');
        });
    }
}
