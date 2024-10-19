<?php

namespace Definite\Pressrelease\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
