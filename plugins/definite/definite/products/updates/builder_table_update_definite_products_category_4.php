<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsCategory4 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_keywords');
        });
    }
}
