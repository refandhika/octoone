<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteActivitiesArticleimt extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_articleimt', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('article_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_articleimt');
    }
}
