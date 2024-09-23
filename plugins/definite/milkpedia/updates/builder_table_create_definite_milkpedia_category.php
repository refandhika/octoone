<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteMilkpediaCategory extends Migration
{
    public function up()
    {
        Schema::create('definite_milkpedia_category', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->integer('parent_id');
            $table->integer('order');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_milkpedia_category');
    }
}
