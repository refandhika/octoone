<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Kuekering4 extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_kuekering', function($table)
        {
            $table->string('resep_slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_kuekering', function($table)
        {
            $table->dropColumn('resep_slug');
        });
    }
}
