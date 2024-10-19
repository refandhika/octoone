<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaTag extends Migration
{
    public function up()
    {
        Schema::table('definite_milkpedia_tag', function ($table) {
            $table->renameColumn('description', 'title');
        });
    }

    public function down()
    {
        Schema::table('definite_milkpedia_tag', function ($table) {
            $table->renameColumn('title', 'description');
        });
    }
}
