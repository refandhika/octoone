<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Kuekering2 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_kuekering', function($table)
        {
            $table->integer('resep')->nullable()->change();
            $table->integer('resep_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_kuekering', function($table)
        {
            $table->integer('resep')->nullable(false)->change();
            $table->integer('resep_id')->nullable(false)->change();
        });
    }
}
