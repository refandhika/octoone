<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteProducts extends Migration
{
    public function up()
    {
        Schema::table('definite_products_', function ($table) {
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->bigIncrements('id')->unsigned(false)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_products_', function ($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->bigIncrements('id')->unsigned()->change();
        });
    }
}
