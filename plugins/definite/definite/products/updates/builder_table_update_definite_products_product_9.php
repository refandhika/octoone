<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsProduct9 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->integer('order')->default(0);
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('order');
        });
    }
}
