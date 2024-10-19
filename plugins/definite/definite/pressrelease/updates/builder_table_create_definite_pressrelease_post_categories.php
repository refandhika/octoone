<?php

namespace Definite\Pressrelease\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
