<?php

namespace Definite\Milkpedia\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDefiniteMilkpediaPostsCategories extends Migration
{
    public function up()
    {
        Schema::rename('definite_milkpedia_post_categories', 'definite_milkpedia_posts_categories');
    }

    public function down()
    {
        Schema::rename('definite_milkpedia_posts_categories', 'definite_milkpedia_post_categories');
    }
}
