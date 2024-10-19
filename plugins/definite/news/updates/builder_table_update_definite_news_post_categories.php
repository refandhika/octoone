<?php

namespace Definite\News\Updates;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
