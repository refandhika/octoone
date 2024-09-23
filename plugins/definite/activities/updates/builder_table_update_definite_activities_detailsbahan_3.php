<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesDetailsbahan3 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->string('kalsium', 150)->nullable()->unsigned(false)->default(null)->change();
            $table->string('gula', 150)->nullable()->unsigned(false)->default(null)->change();
            $table->string('vita', 150)->nullable()->unsigned(false)->default(null)->change();
            $table->string('vitd', 150)->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_detailsbahan', function($table)
        {
            $table->integer('kalsium')->nullable()->unsigned(false)->default(null)->change();
            $table->integer('gula')->nullable()->unsigned(false)->default(null)->change();
            $table->integer('vita')->nullable()->unsigned(false)->default(null)->change();
            $table->integer('vitd')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
