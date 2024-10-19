<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
