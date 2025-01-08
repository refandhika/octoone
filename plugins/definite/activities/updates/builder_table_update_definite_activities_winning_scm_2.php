<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesWinningScm2 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_winning_scm', function($table)
        {
            $table->string('main_banner', 100);
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_winning_scm', function($table)
        {
            $table->dropColumn('main_banner');
        });
    }
}
