<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesActivity5 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->integer('favorite')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->dropColumn('favorite');
        });
    }
}
