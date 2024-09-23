<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaFaq2 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_faq', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_faq', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
