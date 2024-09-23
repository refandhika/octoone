<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteProductsDetailKemasan extends Migration
{
    public function up()
    {
        Schema::create('definite_products_detail_kemasan', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('product_id');
            $table->string('jenis');
            $table->string('value');
            $table->string('satuan');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_detail_kemasan');
    }
}
