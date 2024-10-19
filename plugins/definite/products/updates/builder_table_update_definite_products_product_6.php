<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsProduct6 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->integer('parent_id')->nullable();
            $table->dropColumn('varian_rasa');
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('parent_id');
            $table->text('varian_rasa');
        });
    }
}
