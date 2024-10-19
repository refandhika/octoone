<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesDetailsbahan extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->integer('kalsium')->nullable();
            $table->integer('gula')->nullable();
            $table->integer('vita')->nullable();
            $table->integer('vitd')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->dropColumn('kalsium');
            $table->dropColumn('gula');
            $table->dropColumn('vita');
            $table->dropColumn('vitd');
        });
    }
}
