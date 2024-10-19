<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesDetailsbahan2 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->integer('resep_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->dropColumn('resep_id');
        });
    }
}
