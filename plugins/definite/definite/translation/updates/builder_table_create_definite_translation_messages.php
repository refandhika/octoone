<?php

namespace Definite\Translation\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableCreateDefiniteTranslationMessages extends Migration
{
    public function up()
    {
        Schema::create('definite_translation_messages', function ($table) {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->string('key');
            $table->string('lang');
            $table->string('value');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->primary(['id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('definite_translation_messages');
    }
}
