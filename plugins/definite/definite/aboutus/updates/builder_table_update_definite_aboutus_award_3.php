<?php

namespace Definite\Aboutus\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class BuilderTableUpdateDefiniteAboutusAward3 extends Migration
{
    public function up()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at');
            $table->increments('id')->unsigned(false)->change();
            $table->string('title')->nullable()->change();
            $table->date('published_date')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('definite_aboutus_award', function ($table) {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
            $table->increments('id')->unsigned()->change();
            $table->string('title', 255)->nullable(false)->change();
            $table->date('published_date')->nullable(false)->change();
        });
    }
}
