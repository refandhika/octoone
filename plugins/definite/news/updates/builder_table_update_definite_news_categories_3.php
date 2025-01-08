<?php

namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteNewsCategories3 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_categories', function ($table) {
            $table->string('title_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_news_categories', function ($table) {
            $table->dropColumn('title_en');
        });
    }
}
