<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpedia extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_', function ($table) {
            $table->text('content');
            $table->text('excerpt');
            $table->text('featured_image');
            $table->text('meta_seo_title');
            $table->text('meta_seo_description');
            $table->text('meta_seo_keyword');
            $table->string('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_', function ($table) {
            $table->dropColumn('content');
            $table->dropColumn('excerpt');
            $table->dropColumn('featured_image');
            $table->dropColumn('meta_seo_title');
            $table->dropColumn('meta_seo_description');
            $table->dropColumn('meta_seo_keyword');
            $table->text('title')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
