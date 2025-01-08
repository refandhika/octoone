<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsProduct2 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->boolean('published')->default(0);
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('published');
        });
    }
}
