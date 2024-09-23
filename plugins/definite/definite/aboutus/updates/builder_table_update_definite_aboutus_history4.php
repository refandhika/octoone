<?php

namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusHistory4 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_history', function ($table) {
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_history', function ($table) {
            $table->dropColumn('description_en');
        });
    }
}