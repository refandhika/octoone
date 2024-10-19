<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesSahur2 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_sahur', function($table)
        {
            $table->text('recipes');
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_sahur', function($table)
        {
            $table->dropColumn('recipes');
        });
    }
}
