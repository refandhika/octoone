<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
