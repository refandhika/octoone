<?php

namespace Definite\Milkpedia\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaPost extends Migration
{
    public function up()
    {
        Schema::rename('definite_milkpedia_', 'definite_milkpedia_post');
    }

    public function down()
    {
        Schema::rename('definite_milkpedia_post', 'definite_milkpedia_');
    }
}
