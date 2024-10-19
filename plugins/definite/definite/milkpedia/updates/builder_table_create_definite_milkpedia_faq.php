<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDefiniteMilkpediaFaq extends Migration
{
    public function up()
    {
        Schema::create('definite_milkpedia_faq', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_milkpedia_faq');
    }
}
