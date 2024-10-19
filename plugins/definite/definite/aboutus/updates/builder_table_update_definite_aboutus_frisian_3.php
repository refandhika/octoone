<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusFrisian3 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
