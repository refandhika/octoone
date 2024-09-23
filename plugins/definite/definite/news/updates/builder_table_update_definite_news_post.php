<?php

namespace Definite\News\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateDefiniteNewsPost extends Migration
{
    public function up()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->primary(['id']);
        });
    }

    public function down()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->dropPrimary(['id']);
        });
    }
}
