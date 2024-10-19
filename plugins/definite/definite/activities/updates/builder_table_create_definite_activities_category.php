<?php namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteActivitiesCategory extends Migration
{
    public function up()
    {
        Schema::create('definite_activities_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('published')->default(1);
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_activities_category');
    }
}
