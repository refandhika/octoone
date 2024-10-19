<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteMilkpediaCategory3 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->text('description')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->dropColumn('description');
        });
    }
}
