<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesActivity extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->dropColumn('description');
        });
    }
}
