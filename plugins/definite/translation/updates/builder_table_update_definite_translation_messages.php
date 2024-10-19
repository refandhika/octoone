<?php

namespace Definite\Translation\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteTranslationMessages extends Migration
{
    public function up()
    {
        Schema::table('definite_translation_messages', function ($table) {
            $table->increments('id')->change();
        });
    }

    public function down()
    {
        Schema::table('definite_translation_messages', function ($table) {
            $table->integer('id')->change();
        });
    }
}
