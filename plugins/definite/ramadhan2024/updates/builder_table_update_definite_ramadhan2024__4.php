<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan20244 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->integer('recipes')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->text('recipes')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
