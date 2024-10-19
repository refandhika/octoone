<?php

namespace Definite\News\Updates;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
