<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteActivitiesWinningScm extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_winning_scm', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_winning_scm');
    }
}
