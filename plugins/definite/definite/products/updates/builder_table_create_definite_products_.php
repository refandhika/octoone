<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteProducts extends Migration
{
    public function up()
    {
        Schema::create('definite_products_', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('title');
            $table->text('slug');
            $table->text('subtitle');
            $table->text('content');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_');
    }
}
