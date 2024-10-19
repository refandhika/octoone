<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusPost extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_post', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->text('friesland_en')->nullable();
            $table->text('flag_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_post', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
            $table->dropColumn('friesland_en');
            $table->dropColumn('flag_en');
        });
    }
}
