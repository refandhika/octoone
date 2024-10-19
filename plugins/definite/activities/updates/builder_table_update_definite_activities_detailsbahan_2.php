<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
