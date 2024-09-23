<?php

namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusAward6 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->text('file_upload');
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->dropColumn('file_upload');
        });
    }
}
