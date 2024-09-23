<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteProducts2 extends Migration
{
    public function up()
    {
        Schema::table('definite_products_', function ($table) {
            $table->text('featured_image');
            $table->timestamp('deleted_at')->nullable();
            $table->text('small_packshot_image');
            $table->text('ringkasan_gizi');
            $table->text('detail_kemasan');
        });
    }

    public function down()
    {
        Schema::table('definite_products_', function ($table) {
            $table->dropColumn('featured_image');
            $table->dropColumn('deleted_at');
            $table->dropColumn('small_packshot_image');
            $table->dropColumn('ringkasan_gizi');
            $table->dropColumn('detail_kemasan');
        });
    }
}
