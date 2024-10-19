<?php namespace Leverate\Careers\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
