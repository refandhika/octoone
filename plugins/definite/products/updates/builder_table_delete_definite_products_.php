<?php

namespace Definite\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteDefiniteProducts extends Migration
{
    public function up()
    {
        Schema::dropIfExists('definite_products_');
    }

    public function down()
    {
        Schema::create('definite_products_', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->text('subtitle')->nullable();
            $table->text('featured_image')->nullable();
            $table->text('image')->nullable();
            $table->text('description')->nullable();
            $table->text('small_packshot_image')->nullable();
            $table->integer('parent_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
