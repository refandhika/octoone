<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesSahur extends Migration
{
    public function up()
    {
        Schema::rename('definite_activities_', 'definite_activities_sahur');
        Schema::table('definite_activities_sahur', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('definite_activities_sahur', 'definite_activities_');
        Schema::table('definite_activities_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
