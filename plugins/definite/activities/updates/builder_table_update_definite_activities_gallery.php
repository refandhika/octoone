<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesGallery extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_gallery', function($table)
        {
            $table->text('slug');
            $table->dropColumn('categories_id');
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_gallery', function($table)
        {
            $table->dropColumn('slug');
            $table->integer('categories_id')->unsigned();
        });
    }
}
