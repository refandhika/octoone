<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost2 extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->text('slug');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_post', function ($table) {
            $table->dropColumn('slug');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
}
