<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

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
