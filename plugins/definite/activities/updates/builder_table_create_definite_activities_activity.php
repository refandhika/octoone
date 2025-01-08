<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteActivitiesActivity extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_activity', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('slug');
            $table->text('image_banner')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('info')->nullable();
            $table->boolean('published')->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('definite_activities_activity');
    }
}
