<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteMilkpediaTag extends Migration
{
    public function up()
    {
        Schema::create('definite_milkpedia_tag', function ($table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_milkpedia_tag');
    }
}
