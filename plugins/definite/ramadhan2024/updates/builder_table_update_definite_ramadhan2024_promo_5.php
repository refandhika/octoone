<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Promo5 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_promo', function($table)
        {
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_promo', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
