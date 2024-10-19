<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateLeverateCareersLocation extends Migration
{
    public function up()
    {
        Schema::create('leverate_careers_location', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leverate_careers_location');
    }
}
