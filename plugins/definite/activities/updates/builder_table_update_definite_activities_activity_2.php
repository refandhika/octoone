<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesActivity2 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->string('title_en', 255)->nullable();
            $table->string('subtitle_en', 255)->nullable();
            $table->text('description_en')->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_title_en', 255)->nullable();
            $table->text('meta_description_en')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_activity', function($table)
        {
            $table->dropColumn('title_en');
            $table->dropColumn('subtitle_en');
            $table->dropColumn('description_en');
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_description_en');
        });
    }
}
