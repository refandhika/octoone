<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsProduct extends Migration
{
    public function up()
    {
        Schema::rename('definite_products_', 'definite_products_product');
    }

    public function down()
    {
        Schema::rename('definite_products_product', 'definite_products_');
    }
}
