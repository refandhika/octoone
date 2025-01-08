<?php

namespace Definite\Pressrelease\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefinitePressreleasePost extends Migration
{
    public function up()
    {
        Schema::table('definite_pressrelease_post', function ($table) {
            $table->text('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_pressrelease_post', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
