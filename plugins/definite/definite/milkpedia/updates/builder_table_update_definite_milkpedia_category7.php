<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaCategory7 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_title_en', 255)->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_keywords_en')->nullable();
            $table->integer('parent_id')->default(null)->change();
            $table->integer('order')->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_description_en');
            $table->dropColumn('meta_keywords_en');
            $table->integer('parent_id')->default(null)->change();
            $table->integer('order')->default(null)->change();
        });
    }
}
