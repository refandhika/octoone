<?php

namespace Definite\FunFact\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteFunfactFunfact2 extends Migration
{
    public function up()
    {
        Schema::table('definite_funfact_funfact', function ($table) {
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_funfact_funfact', function ($table) {
            $table->dropColumn('description_en');
        });
    }
}