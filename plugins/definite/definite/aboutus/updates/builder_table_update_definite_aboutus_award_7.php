<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteAboutusAward7 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
