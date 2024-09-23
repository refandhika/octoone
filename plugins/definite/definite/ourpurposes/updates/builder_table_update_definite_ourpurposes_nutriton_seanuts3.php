<?php

namespace Definite\Ourpurposes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteOurpurposesNutritonSeanuts3 extends Migration
{
    public function up()
    {
        Schema::table('definite_ourpurposes_nutriton_seanuts', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_ourpurposes_nutriton_seanuts', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}