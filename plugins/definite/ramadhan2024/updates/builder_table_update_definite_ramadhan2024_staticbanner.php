<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteRamadhan2024Staticbanner extends Migration
{
    public function up()
    {
        Schema::table('definite_ramadhan2024_staticbanner', function($table)
        {
            $table->string('image_mobile', 255);
        });
    }
    
    public function down()
    {
        Schema::table('definite_ramadhan2024_staticbanner', function($table)
        {
            $table->dropColumn('image_mobile');
        });
    }
}
