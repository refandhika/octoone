<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateLeverateCareersCategory2 extends Migration
{
    public function up()
    {
        Schema::create('leverate_careers_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_careers_category');
    }
}
