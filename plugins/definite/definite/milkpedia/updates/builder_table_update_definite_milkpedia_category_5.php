<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaCategory5 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->string('title_en')->nullable();
            $table->string('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
