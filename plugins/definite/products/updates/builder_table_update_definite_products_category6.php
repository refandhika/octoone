<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsCategory6 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->string('meta_title', 255)->nullable()->default(null);
            $table->text('meta_description_en')->nullable()->default(null);
            $table->text('meta_keywords_en')->nullable()->default(null);
            $table->string('meta_title_en', 255)->nullable()->default(null);
            $table->integer('parent_id')->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description_en');
            $table->dropColumn('meta_keywords_en');
            $table->dropColumn('meta_title_en');
            $table->integer('parent_id')->default(null)->change();
        });
    }
}
