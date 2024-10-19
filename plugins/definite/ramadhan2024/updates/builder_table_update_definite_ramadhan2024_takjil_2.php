<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Takjil2 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_takjil', function($table)
        {
            $table->integer('resep_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_takjil', function($table)
        {
            $table->integer('resep_id')->nullable(false)->change();
        });
    }
}
