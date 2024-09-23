<?php namespace Leverate\Careers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteLeverateCareersCategory extends Migration
{
    public function up()
    {
        Schema::dropIfExists('leverate_careers_category');
    }
    
    public function down()
    {
        Schema::create('leverate_careers_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('category_name', 255);
        });
    }
}
