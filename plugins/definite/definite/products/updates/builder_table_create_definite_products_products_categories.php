<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteProductsProductsCategories extends Migration
{
    public function up()
    {
        Schema::create('definite_products_products_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('category_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_products_categories');
    }
}
