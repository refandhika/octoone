<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeverateCareersCategory extends Migration
{
    public function up()
    {
        Schema::create('leverate_careers_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_careers_category');
    }
}
