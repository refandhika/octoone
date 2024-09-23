<?php

namespace Definite\Pressrelease\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefinitePressreleasePostCategories extends Migration
{
    public function up()
    {
        Schema::create('definite_pressrelease_post_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('press_release_id');
            $table->integer('categories_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_pressrelease_post_categories');
    }
}
