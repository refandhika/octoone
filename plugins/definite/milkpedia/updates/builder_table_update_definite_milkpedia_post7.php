<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost7 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_title_en')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_keywords_en')->nullable();
            $table->dropColumn('meta_seo_title');
            $table->dropColumn('meta_seo_description');
            $table->dropColumn('meta_seo_keyword');
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_description_en');
            $table->dropColumn('meta_keywords_en');
            $table->text('meta_seo_title')->nullable();
            $table->text('meta_seo_description')->nullable();
            $table->text('meta_seo_keyword')->nullable();
        });
    }
}
