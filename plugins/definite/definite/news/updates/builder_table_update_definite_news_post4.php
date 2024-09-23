<?php

namespace Definite\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteNewsPost4 extends Migration
{
    public function up()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_title_en', 255)->nullable();
            $table->text('meta_description_en')->nullable();
            $table->dropColumn('meta_seo_title');
            $table->dropColumn('meta_seo_descripztion');
            $table->dropColumn('meta_seo_keyword');
        });
    }

    public function down()
    {
        Schema::table('definite_news_post', function ($table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_description_en');
            $table->text('meta_seo_title')->nullable();
            $table->text('meta_seo_descripztion')->nullable();
            $table->text('meta_seo_keyword')->nullable();
        });
    }
}
