<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusFrisian2 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->text('frisian')->nullable();
            $table->dropColumn('title');
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->dropColumn('frisian');
            $table->string('title', 255)->nullable();
        });
    }
}
