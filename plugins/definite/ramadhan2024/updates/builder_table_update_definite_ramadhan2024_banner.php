<?php namespace Definite\Ramadhan2024\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Banner extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_banner', function($table)
        {
            $table->string('image_mobile', 255);
            $table->renameColumn('image', 'image_desktop');
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_banner', function($table)
        {
            $table->dropColumn('image_mobile');
            $table->renameColumn('image_desktop', 'image');
        });
    }
}
