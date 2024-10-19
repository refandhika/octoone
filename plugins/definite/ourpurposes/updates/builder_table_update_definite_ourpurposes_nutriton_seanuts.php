<?php

namespace Definite\Ourpurposes\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteOurpurposesNutritonSeanuts extends Migration
{
    public function up()
    {
        Schema::table('definite_ourpurposes_nutriton_seanuts', function ($table) {
            $table->increments('id')->unsigned(false)->change();
            $table->string('title', 25)->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->text('file_upload')->nullable()->change();
            $table->text('image')->nullable()->change();
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }

    public function down()
    {
        Schema::table('definite_ourpurposes_nutriton_seanuts', function ($table) {
            $table->increments('id')->unsigned()->change();
            $table->string('title', 25)->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->text('file_upload')->nullable(false)->change();
            $table->text('image')->nullable(false)->change();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->timestamp('deleted_at');
        });
    }
}
