<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteActivitiesCategoriesActivities extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_categories_activities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('activity_id');
            $table->integer('category_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_activities_categories_activities');
    }
}
