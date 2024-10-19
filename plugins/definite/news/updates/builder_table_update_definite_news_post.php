<?php

namespace Definite\News\Updates;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
