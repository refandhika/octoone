<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost3 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->text('content')->nullable()->change();
            $table->text('excerpt')->nullable()->change();
            $table->text('featured_image')->nullable()->change();
            $table->text('meta_seo_title')->nullable()->change();
            $table->text('meta_seo_description')->nullable()->change();
            $table->text('meta_seo_keyword')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->text('content')->nullable(false)->change();
            $table->text('excerpt')->nullable(false)->change();
            $table->text('featured_image')->nullable(false)->change();
            $table->text('meta_seo_title')->nullable(false)->change();
            $table->text('meta_seo_description')->nullable(false)->change();
            $table->text('meta_seo_keyword')->nullable(false)->change();
        });
    }
}
