<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteProductsCategory extends Migration
{
    public function up()
    {
        Schema::create('definite_products_category', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->string('subtitle')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('image')->nullable();
            $table->text('small_packshot_image')->nullable();
            $table->text('description')->nullable();
            $table->integer('parent_id')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_products_category');
    }
}
