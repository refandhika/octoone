<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsProduct11 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->text('meta_title')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('meta_title');
        });
    }
}
