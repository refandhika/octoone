<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProducts3 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_', function ($table) {
            $table->dropColumn('ringkasan_gizi');
            $table->dropColumn('detail_kemasan');
        });
    }

    public function down()
    {
        Schema::table('definite_products_', function ($table) {
            $table->text('ringkasan_gizi');
            $table->text('detail_kemasan');
        });
    }
}
