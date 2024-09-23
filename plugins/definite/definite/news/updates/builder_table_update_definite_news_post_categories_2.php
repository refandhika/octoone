<?php

namespace Definite\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateDefiniteNewsPostCategories2 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_post_categories', function ($table) {
            $table->integer('news_id')->unsigned(false)->change();
            $table->integer('categories_id')->unsigned(false)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_news_post_categories', function ($table) {
            $table->integer('news_id')->unsigned()->change();
            $table->integer('categories_id')->unsigned()->change();
        });
    }
}
