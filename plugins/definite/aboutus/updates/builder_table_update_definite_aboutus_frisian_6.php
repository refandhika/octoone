<?php

namespace Definite\Aboutus\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteAboutusFrisian6 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('frisian')->nullable()->change();
            $table->string('title', 255)->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_frisian', function ($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->text('frisian')->nullable(false)->change();
            $table->string('title', 255)->nullable(false)->change();
        });
    }
}
