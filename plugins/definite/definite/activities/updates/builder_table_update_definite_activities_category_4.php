<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesCategory4 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->renameColumn('image_gallery_link', 'image_link');
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->renameColumn('image_link', 'image_gallery_link');
        });
    }
}
