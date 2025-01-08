<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsProduct3 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->text('ringkasan_gizi')->nullable();
            $table->text('detail_kemasan')->nullable();
            $table->text('link_e_commerce')->nullable();
            $table->text('subtitle')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->text('featured_image')->nullable()->change();
            $table->text('small_packshot_image')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('definite_products_product', function ($table) {
            $table->dropColumn('ringkasan_gizi');
            $table->dropColumn('detail_kemasan');
            $table->dropColumn('link_e_commerce');
            $table->text('subtitle')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->text('featured_image')->nullable(false)->change();
            $table->text('small_packshot_image')->nullable(false)->change();
        });
    }
}
