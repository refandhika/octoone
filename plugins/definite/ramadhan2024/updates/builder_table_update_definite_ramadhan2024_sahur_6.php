<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Sahur6 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->string('produk', 255)->nullable();
            $table->string('bahan_utama', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_sahur', function($table)
        {
            $table->dropColumn('produk');
            $table->dropColumn('bahan_utama');
        });
    }
}
