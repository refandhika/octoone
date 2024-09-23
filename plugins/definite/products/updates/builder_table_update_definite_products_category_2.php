<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProductsCategory2 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->boolean('is_featured')->default(0);
        });
    }

    public function down()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->dropColumn('is_featured');
        });
    }
}
