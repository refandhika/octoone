<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteProductsRingkasanGizi extends Migration
{
    public function up()
    {
        Schema::create('definite_products_ringkasan_gizi', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
            $table->string('title')->nullable();
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_ringkasan_gizi');
    }
}
