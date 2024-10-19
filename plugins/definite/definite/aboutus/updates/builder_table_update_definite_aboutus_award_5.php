<?php

namespace Definite\Aboutus\Updates;

use October\Rain\Database\Updates\Migration;
use Illuminate\Support\Facades\Schema;

class BuilderTableUpdateDefiniteAboutusAward5 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->text('description')->nullable();
            $table->date('published_date')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->dropColumn('description');
            $table->dropColumn('published_date');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
