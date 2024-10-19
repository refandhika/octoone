<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteMilkpediaCategory extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->integer('parent_id')->nullable()->change();
            $table->integer('order')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_category', function ($table) {
            $table->integer('parent_id')->nullable(false)->change();
            $table->integer('order')->nullable(false)->change();
        });
    }
}
