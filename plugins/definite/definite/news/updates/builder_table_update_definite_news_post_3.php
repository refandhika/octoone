<?php

namespace Definite\News\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteNewsPost3 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
