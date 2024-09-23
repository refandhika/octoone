<?php

namespace Definite\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateDefiniteNewsCategories extends Migration
{
    public function up()
    {
        Schema::table('definite_news_categories', function ($table) {
            $table->primary(['id']);
        });
    }

    public function down()
    {
        Schema::table('definite_news_categories', function ($table) {
            $table->dropPrimary(['id']);
        });
    }
}
