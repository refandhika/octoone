<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesActivity6 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->text('bahan')->nullable();
            $table->text('caramemasak')->nullable();
            $table->text('waktumemasak')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->dropColumn('bahan');
            $table->dropColumn('caramemasak');
            $table->dropColumn('waktumemasak');
        });
    }
}
