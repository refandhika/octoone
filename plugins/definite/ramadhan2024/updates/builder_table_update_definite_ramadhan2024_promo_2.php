<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
