<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteMilkpedia extends Migration
{
    public function up()
    {
        Schema::create('definite_milkpedia_', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->text('title');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_milkpedia_');
    }
}
