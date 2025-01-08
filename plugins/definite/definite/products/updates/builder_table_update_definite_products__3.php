<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
