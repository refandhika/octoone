<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesWinningScm extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_winning_scm', function($table)
        {
            $table->text('articles');
            $table->text('banners');
            $table->text('promos');
            $table->text('recipes');
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_winning_scm', function($table)
        {
            $table->dropColumn('articles');
            $table->dropColumn('banners');
            $table->dropColumn('promos');
            $table->dropColumn('recipes');
        });
    }
}
