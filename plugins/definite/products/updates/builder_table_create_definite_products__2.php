<?php

namespace Definite\Products\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteProducts2 extends Migration
{
    public function up()
    {
        Schema::create('definite_products_', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
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

    public function down()
    {
        Schema::dropIfExists('definite_products_');
    }
}
