<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesActivity8 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->string('energi', 255)->nullable();
            $table->string('lemak', 255)->nullable();
            $table->string('protein', 255)->nullable();
            $table->string('karbohidrat', 255)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->dropColumn('energi');
            $table->dropColumn('lemak');
            $table->dropColumn('protein');
            $table->dropColumn('karbohidrat');
        });
    }
}
