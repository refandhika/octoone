<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class BuilderTableUpdateDefiniteAboutusHistory3 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_history', function ($table) {
            $table->text('file_upload')->nullable(false)->change();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_history', function ($table) {
            $table->text('file_upload')->nullable()->change();
        });
    }
}
