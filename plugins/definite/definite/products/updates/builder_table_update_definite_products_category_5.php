<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsCategory5 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->string('title_en')->nullable();
            $table->string('subtitle_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('subtitle_en');
            $table->dropColumn('description_en');
        });
    }
}
