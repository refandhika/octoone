<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteActivities extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_');
    }
}
