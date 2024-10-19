<?php

namespace Definite\Aboutus\Updates;

use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\Schema;

class BuilderTableUpdateDefiniteAboutusAward extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->string('title', 255)->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->dropColumn('title');
        });
    }
}
