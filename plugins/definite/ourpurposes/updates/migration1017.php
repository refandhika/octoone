<?php

namespace Definite\Ourpurposes\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class Migration1017 extends Migration
{
    public function up()
    {
        Schema::table('definite_ourpurposes_local_farmer', function ($table) {
            $table->string('title_en')->nullable();
            $table->text('description_en')->nullable();
            $table->dateTime('updated_at')->nullable()->default(null)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_ourpurposes_local_farmer', function ($table) {
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
            $table->dateTime('updated_at')->nullable(false)->default(null)->change();
        });
    }
}
