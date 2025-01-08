<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteProductsVarianRasa extends Migration
{
    public function up()
    {
        Schema::create('definite_products_varian_rasa', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('product_id');
            $table->integer('variant_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_varian_rasa');
    }
}
