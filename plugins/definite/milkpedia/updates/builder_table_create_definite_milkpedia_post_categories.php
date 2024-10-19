<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteMilkpediaPostCategories extends Migration
{
    public function up()
    {
        Schema::create('definite_milkpedia_post_categories', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('milkpedia_id');
            $table->integer('category_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_milkpedia_post_categories');
    }
}
