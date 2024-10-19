<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsRingkasanGizi extends Migration
{
    public function up()
    {
        Schema::table('definite_products_ringkasan_gizi', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_products_ringkasan_gizi', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}