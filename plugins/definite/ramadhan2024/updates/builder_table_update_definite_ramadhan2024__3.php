<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan20243 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->renameColumn('resep', 'recipes');
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_', function($table)
        {
            $table->renameColumn('recipes', 'resep');
        });
    }
}
