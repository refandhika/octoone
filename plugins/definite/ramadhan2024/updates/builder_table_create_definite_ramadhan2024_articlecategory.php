<?php namespace Definite\Ramadhan2024\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteRamadhan2024Articlecategory extends Migration
{
    public function up()
    {
        Schema::create('definite_ramadhan2024_articlecategory', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_ramadhan2024_articlecategory');
    }
}
