<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesCategory5 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->dropColumn('image_gallery');
        });
    }
    
    public function down()
    {
        Schema::table('definite_activities_category', function($table)
        {
            $table->text('image_gallery')->nullable();
        });
    }
}
