<?php

namespace Definite\Translation\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteTranslationMessages2 extends Migration
{
    public function up()
    {
        Schema::table('definite_translation_messages', function ($table) {
            $table->string('value_id', 255);
            $table->string('value_en', 255);
            $table->increments('id')->unsigned(false)->change();
            $table->dropColumn('lang');
            $table->dropColumn('value');
        });
    }

    public function down()
    {
        Schema::table('definite_translation_messages', function ($table) {
            $table->dropColumn('value_id');
            $table->dropColumn('value_en');
            $table->increments('id')->unsigned()->change();
            $table->string('lang', 255);
            $table->string('value', 255);
        });
    }
}
