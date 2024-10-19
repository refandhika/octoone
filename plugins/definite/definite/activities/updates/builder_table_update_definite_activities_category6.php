<?php

namespace Definite\Activities\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteActivitiesCategory6 extends Migration
{
    public function up()
    {
        Schema::table('definite_activities_category', function ($table) {
            $table->string('meta_title', 255)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_title_en', 255)->nullable();
            $table->text('meta_description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_activities_category', function ($table) {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
            $table->dropColumn('meta_title_en');
            $table->dropColumn('meta_description_en');
        });
    }
}