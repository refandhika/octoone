<?php

namespace Definite\FunFact\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteFunfactFunfact extends Migration
{
    public function up()
    {
        Schema::create('definite_funfact_funfact', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->smallInteger('no')->nullable();
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_funfact_funfact');
    }
}
