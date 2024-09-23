<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaCategory6 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->text('description_en')->nullable()->unsigned(false)->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->string('description_en', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
