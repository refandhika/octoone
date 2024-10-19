<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteAboutusFrisian4 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->string('frisian', 65535)->nullable()->unsigned(false)->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->text('frisian')->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
