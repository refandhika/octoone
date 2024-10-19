<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesArticleimt2 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_articleimt', function($table)
        {
            $table->text('imt_label')->nullable();
            $table->text('fr_label')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_articleimt', function($table)
        {
            $table->dropColumn('imt_label');
            $table->dropColumn('fr_label');
        });
    }
}
