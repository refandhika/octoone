<?php

namespace Definite\Pressrelease\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefinitePressreleaseCategories extends Migration
{
    public function up()
    {
        Schema::table('definite_pressrelease_categories', function ($table) {
            $table->text('title_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_pressrelease_categories', function ($table) {
            $table->dropColumn('title_en');
        });
    }
}
