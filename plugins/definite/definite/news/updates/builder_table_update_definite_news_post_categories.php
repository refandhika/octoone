<?php

namespace Definite\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateDefiniteNewsPostCategories extends Migration
{
    public function up()
    {
        Schema::table('definite_news_post_categories', function ($table) {
            $table->renameColumn('post_id', 'news_id');
        });
    }

    public function down()
    {
        Schema::table('definite_news_post_categories', function ($table) {
            $table->renameColumn('news_id', 'post_id');
        });
    }
}
