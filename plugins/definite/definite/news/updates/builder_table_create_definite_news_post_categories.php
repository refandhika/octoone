<?php

namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteNewsPostCategories extends Migration
{
    public function up()
    {
        Schema::create('definite_news_post_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('post_id')->unsigned();
            $table->integer('categories_id')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_news_post_categories');
    }
}
