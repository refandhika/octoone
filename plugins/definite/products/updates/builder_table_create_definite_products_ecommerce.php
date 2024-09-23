<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteProductsEcommerce extends Migration
{
    public function up()
    {
        Schema::create('definite_products_ecommerce', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
            $table->string('title');
            $table->text('link');
            $table->text('icon');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_ecommerce');
    }
}
