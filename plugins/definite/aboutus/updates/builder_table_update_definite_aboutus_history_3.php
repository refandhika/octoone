<?php

namespace Definite\Aboutus\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

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
