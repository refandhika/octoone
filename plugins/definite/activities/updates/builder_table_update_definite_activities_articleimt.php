<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesArticleimt extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_articleimt', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_articleimt', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
