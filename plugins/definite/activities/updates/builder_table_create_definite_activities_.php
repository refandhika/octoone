<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
