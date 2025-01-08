<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesDetailsbahan4 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->string('category', 150)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->dropColumn('category');
        });
    }
}
