<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteActivitiesCategory3 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->text('image_gallery_link')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->dropColumn('image_gallery_link');
        });
    }
}
