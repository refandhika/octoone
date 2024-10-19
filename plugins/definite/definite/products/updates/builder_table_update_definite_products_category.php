<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProductsCategory extends Migration
{
    public function up()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->increments('id')->unsigned(false)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_products_category', function ($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
        });
    }
}
