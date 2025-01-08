<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Kuekering extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_kuekering', function($table)
        {
            $table->integer('day');
            $table->string('link', 255);
            $table->string('image', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_kuekering', function($table)
        {
            $table->dropColumn('day');
            $table->dropColumn('link');
            $table->dropColumn('image');
        });
    }
}
