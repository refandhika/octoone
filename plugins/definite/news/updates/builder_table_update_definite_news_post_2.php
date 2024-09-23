<?php

namespace Definite\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateDefiniteNewsPost2 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->increments('id')->change();
        });
    }

    public function down()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->integer('id')->change();
        });
    }
}
