<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsProduct12 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->text('meta_description_en')->nullable()->default(null);
            $table->text('meta_keywords_en')->nullable()->default(null);
            $table->text('meta_title_en')->nullable()->default(null);
            $table->integer('parent_id')->default(null)->change();
            $table->dateTime('created_at')->nullable()->default(null)->change();
            $table->dateTime('updated_at')->nullable()->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('meta_description_en');
            $table->dropColumn('meta_keywords_en');
            $table->dropColumn('meta_title_en');
            $table->integer('parent_id')->default(null)->change();
        });
    }
}
