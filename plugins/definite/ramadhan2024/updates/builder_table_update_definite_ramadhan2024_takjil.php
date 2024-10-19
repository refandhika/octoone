<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Takjil extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_takjil', function($table)
        {
            $table->integer('day');
            $table->string('image', 255);
            $table->string('link', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_takjil', function($table)
        {
            $table->dropColumn('day');
            $table->dropColumn('image');
            $table->dropColumn('link');
        });
    }
}
