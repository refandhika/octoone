<?php

namespace Definite\Aboutus\Updates;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class BuilderTableUpdateDefiniteAboutusAward4 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->dropColumn('published_date');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->date('published_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->default('0000-00-00 00:00:00');
        });
    }
}
