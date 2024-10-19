<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost6 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('content_en')->nullable();
            $table->text('excerpt_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('content_en');
            $table->dropColumn('excerpt_en');
        });
    }
}
