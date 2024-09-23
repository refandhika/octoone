<?php

namespace Definite\Pressrelease\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefinitePressreleaseCategories extends Migration
{
    public function up()
    {
        Schema::create('definite_pressrelease_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('title');
            $table->text('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_pressrelease_categories');
    }
}
