<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsCategory3 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->integer('order')->default(0);
        });
    }

    public function down()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->dropColumn('order');
        });
    }
}
