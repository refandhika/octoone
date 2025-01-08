<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsProduct8 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('is_featured');
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->boolean('is_featured')->default(0);
        });
    }
}
