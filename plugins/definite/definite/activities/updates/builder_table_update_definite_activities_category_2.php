<?php namespace Definite\Activities\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesCategory2 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->string('gallery_title')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->dropColumn('gallery_title');
        });
    }
}
