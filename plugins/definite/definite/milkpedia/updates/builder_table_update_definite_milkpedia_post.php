<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

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
