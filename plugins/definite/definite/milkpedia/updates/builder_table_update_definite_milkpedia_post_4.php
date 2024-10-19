<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost4 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->boolean('published')->default(1);
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->dropColumn('published');
        });
    }
}
