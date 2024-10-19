<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Article2 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_article', function($table)
        {
            $table->string('category', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_article', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
