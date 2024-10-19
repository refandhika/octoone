<?php

namespace Definite\News\Updates;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class BuilderTableUpdateDefiniteNewsCategories2 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_categories', function ($table) {
            $table->increments('id')->change();
        });
    }

    public function down()
    {
        Schema::table('definite_news_categories', function ($table) {
            $table->integer('id')->change();
        });
    }
}
