<?php

namespace Definite\Ourpurposes\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteOurpurposesLocalDdp extends Migration
{
    public function up()
    {
        Schema::table('definite_ourpurposes_local_ddp', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_ourpurposes_local_ddp', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
}
